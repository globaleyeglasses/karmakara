<?php
$this->breadcrumbs=array(
	'Crafts'=>array('index'),
	$model->name=>array('view','id'=>$model->craft_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Craft','url'=>array('index')),
	array('label'=>'Create Craft','url'=>array('create')),
	array('label'=>'View Craft','url'=>array('view','id'=>$model->craft_id)),
	array('label'=>'Manage Craft','url'=>array('admin')),
);
?>

<h1>Update Craft <?php echo $model->craft_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>