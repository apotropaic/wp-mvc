<h2><?php echo Inflector::titleize($this->action); ?> <?php echo Inflector::titleize($model->name); ?></h2>

<?php echo $this->form->create($model->name); ?>
<?php echo $this->form->input('first_name'); ?>
<?php echo $this->form->input('last_name'); ?>
<?php echo $this->form->input('url', array('label' => 'URL', 'style' => 'width: 300px;')); ?>
<?php echo $this->form->input('description'); ?>
<?php echo $this->form->end('Add'); ?>