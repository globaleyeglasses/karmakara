<?php
$this->breadcrumbs=array(
	'Crafts'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Craft','url'=>array('index')),
	array('label'=>'Create Craft','url'=>array('create')),
	array('label'=>'Update Craft','url'=>array('update','id'=>$model->craft_id)),
	array('label'=>'Delete Craft','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->craft_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Craft','url'=>array('admin')),
);
?>

<h1>View Craft #<?php echo $model->craft_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'craft_id',
		'name',
		'image',
		'video',
		'description',
		'status',
	),
)); ?>
