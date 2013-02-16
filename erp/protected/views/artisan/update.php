<?php
$this->breadcrumbs=array(
	'Artisans'=>array('index'),
	$model->name=>array('view','id'=>$model->artisan_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Artisan','url'=>array('index')),
	array('label'=>'Create Artisan','url'=>array('create')),
	array('label'=>'View Artisan','url'=>array('view','id'=>$model->artisan_id)),
	array('label'=>'Manage Artisan','url'=>array('admin')),
);
?>

<h1>Update Artisan <?php echo $model->artisan_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>