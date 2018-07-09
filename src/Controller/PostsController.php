<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Routing\Router;

class PostsController extends AppController {
   
    public function initialize(){
        parent::initialize();
        $this->loadModel('Posts');
    }

    public function index(){
        $post = ' ';
        if($this->request->is('post')){
            if(!empty($this->request->data['file']['name'])){
                $filename = $this->request->data['file']['name'];
                $url = Router::url('/', true) .'images/' . $filename;
                $uploadpath = "images/";
                $uploadfile = $uploadpath . $filename;
                if(move_uploaded_file($this->request->data['file']['tmp_name'], $uploadfile)){
                    $post = $this->Posts->newEntity();
                    $post->name = $filename;
                    $post->path = $url;
                    $post->created = date("Y-m-d H:i:s");
                    $post->modified = date("Y-m-d H:i:s");
                    if($this->Posts->save($post)){
                        $this->Flash->success('This was successful');
                    }else{
                        $this->Flash->error(__('Fail to Upload'));
                    }
                }
            }else{
                $this->Flash->error(_('Fail to Upload'));
            }
        }
        $this->set('post', $post);
    }
}
?>