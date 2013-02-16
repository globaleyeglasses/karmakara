<?php
$this->breadcrumbs=array(
	'Po Receives'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PoReceive','url'=>array('index')),
	array('label'=>'Manage PoReceive','url'=>array('admin')),
);
?>

<h1>Create PoReceive</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>