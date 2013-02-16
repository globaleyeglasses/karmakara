<?php
$this->breadcrumbs=array(
	'Crafts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Craft','url'=>array('index')),
	array('label'=>'Manage Craft','url'=>array('admin')),
);
?>

<h1>Create Craft</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>