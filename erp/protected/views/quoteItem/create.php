<?php
$this->breadcrumbs=array(
	'Quote Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List QuoteItem','url'=>array('index')),
	array('label'=>'Manage QuoteItem','url'=>array('admin')),
);
?>

<h1>Create QuoteItem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>