<?php
$this->breadcrumbs=array(
	'Artisans'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Artisan','url'=>array('index')),
	array('label'=>'Create Artisan','url'=>array('create')),
	array('label'=>'Update Artisan','url'=>array('update','id'=>$model->artisan_id)),
	array('label'=>'Delete Artisan','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->artisan_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Artisan','url'=>array('admin')),
);
?>

<h1>View Artisan #<?php echo $model->artisan_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'artisan_id',
		'name',
		'title',
		'description',
		'address1',
		'address2',
		'city',
		'state',
		'country',
		'phone',
		'email',
		'image',
		'video',
		'status',
		'craft_id',
		'created_at',
		'updated_at',
	),
)); ?>
