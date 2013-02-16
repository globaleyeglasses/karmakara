<?php
$this->breadcrumbs=array(
	'Po Receive Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PoReceiveItem','url'=>array('index')),
	array('label'=>'Manage PoReceiveItem','url'=>array('admin')),
);
?>

<h1>Create PoReceiveItem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>