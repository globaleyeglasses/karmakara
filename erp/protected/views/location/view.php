<?php
$this->breadcrumbs=array(
	'Locations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Location','url'=>array('index')),
	array('label'=>'Create Location','url'=>array('create')),
	array('label'=>'Update Location','url'=>array('update','id'=>$model->location_id)),
	array('label'=>'Delete Location','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->location_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Location','url'=>array('admin')),
);
?>

<h1>View Location #<?php echo $model->location_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'location_id',
		'rack_id',
		'name',
		'active',
	),
)); ?>
