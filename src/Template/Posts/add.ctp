<html>
<head>
    <title></title>
</head>
<body>
    <div class="users form large-9 medium-8 columns content">
        <h1>CakePHP Upload File </h1>
        <div class="contet">
        <?php echo $this->Flash->render();?>
        <div class="upload-form">
            <?php echo $this->Form->create($post, ['type' => 'file']); ?>
                <?php echo $this->Form->input('file', ['type' => 'file', 'class' => 'form-control']); ?>
                <?php echo $this->Form->button(_('Upload File'), ['type' => 'submit', 
                'class' => 'form-control btn default']); ?>
             <?php echo $this->Form->end(); ?>
        </div>
        </div>

    </div>


</body>
</html>