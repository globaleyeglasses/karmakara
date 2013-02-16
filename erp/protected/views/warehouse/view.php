<?php
$this->breadcrumbs=array(
	'Warehouses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Warehouse','url'=>array('index')),
	array('label'=>'Create Warehouse','url'=>array('create')),
	array('label'=>'Update Warehouse','url'=>array('update','id'=>$model->warehouse_id)),
	array('label'=>'Delete Warehouse','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->warehouse_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Warehouse','url'=>array('admin')),
);
?>

<h1>View Warehouse #<?php echo $model->warehouse_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'warehouse_id',
		'name',
		'active',
	),
)); ?>
