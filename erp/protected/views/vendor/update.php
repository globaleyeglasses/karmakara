<?php
$this->breadcrumbs=array(
	'Vendors'=>array('index'),
	$model->name=>array('view','id'=>$model->vendor_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vendor','url'=>array('index')),
	array('label'=>'Create Vendor','url'=>array('create')),
	array('label'=>'View Vendor','url'=>array('view','id'=>$model->vendor_id)),
	array('label'=>'Manage Vendor','url'=>array('admin')),
);
?>

<h1>Update Vendor <?php echo $model->vendor_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>