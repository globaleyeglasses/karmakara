<?php
$this->breadcrumbs=array(
	'Racks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rack','url'=>array('index')),
	array('label'=>'Manage Rack','url'=>array('admin')),
);
?>

<h1>Create Rack</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>