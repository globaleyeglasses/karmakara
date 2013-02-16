<?php
$this->breadcrumbs=array(
	'Po Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PoItem','url'=>array('index')),
	array('label'=>'Manage PoItem','url'=>array('admin')),
);
?>

<h1>Create PoItem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>