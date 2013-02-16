<?php
$this->breadcrumbs=array(
	'Artisans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Artisan','url'=>array('index')),
	array('label'=>'Manage Artisan','url'=>array('admin')),
);
?>

<h1>Create Artisan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>