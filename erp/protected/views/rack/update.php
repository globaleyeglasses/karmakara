<?php
$this->breadcrumbs=array(
	'Racks'=>array('index'),
	$model->name=>array('view','id'=>$model->rack_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rack','url'=>array('index')),
	array('label'=>'Create Rack','url'=>array('create')),
	array('label'=>'View Rack','url'=>array('view','id'=>$model->rack_id)),
	array('label'=>'Manage Rack','url'=>array('admin')),
);
?>

<h1>Update Rack <?php echo $model->rack_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>