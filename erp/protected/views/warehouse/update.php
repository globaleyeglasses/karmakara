<?php
$this->breadcrumbs=array(
	'Warehouses'=>array('index'),
	$model->name=>array('view','id'=>$model->warehouse_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Warehouse','url'=>array('index')),
	array('label'=>'Create Warehouse','url'=>array('create')),
	array('label'=>'View Warehouse','url'=>array('view','id'=>$model->warehouse_id)),
	array('label'=>'Manage Warehouse','url'=>array('admin')),
);
?>

<h1>Update Warehouse <?php echo $model->warehouse_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>