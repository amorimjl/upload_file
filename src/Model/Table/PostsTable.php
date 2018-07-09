<?php 
//src/Model/Tables/FilesTable.php

namespace App\Model\Table;

Use Cake\ORM\Table;

class PostsTable extends Table
{
    public function initialize(array $config){
        $this->addBehavior('TimeStamp');
    }
}


?>