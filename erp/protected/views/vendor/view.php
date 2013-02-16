<?php
$this->breadcrumbs=array(
	'Vendors'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Vendor','url'=>array('index')),
	array('label'=>'Create Vendor','url'=>array('create')),
	array('label'=>'Update Vendor','url'=>array('update','id'=>$model->vendor_id)),
	array('label'=>'Delete Vendor','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->vendor_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vendor','url'=>array('admin')),
);
?>

<h1>View Vendor #<?php echo $model->vendor_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'created_at',
		'updated_at',
		'vendor_id',
		'created_date',
		'name',
		'address1',
		'address2',
		'city',
		'state',
		'country',
		'phone',
		'email',
		'status',
	),
)); ?>
