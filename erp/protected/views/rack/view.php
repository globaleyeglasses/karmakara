<?php
$this->breadcrumbs=array(
	'Racks'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Rack','url'=>array('index')),
	array('label'=>'Create Rack','url'=>array('create')),
	array('label'=>'Update Rack','url'=>array('update','id'=>$model->rack_id)),
	array('label'=>'Delete Rack','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->rack_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rack','url'=>array('admin')),
);
?>

<h1>View Rack #<?php echo $model->rack_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'rack_id',
		'warehouse_id',
		'name',
		'active',
	),
)); ?>
