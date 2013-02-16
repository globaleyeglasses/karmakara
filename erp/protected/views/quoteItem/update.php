<?php
$this->breadcrumbs=array(
	'Quote Items'=>array('index'),
	$model->qoute_item_id=>array('view','id'=>$model->qoute_item_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List QuoteItem','url'=>array('index')),
	array('label'=>'Create QuoteItem','url'=>array('create')),
	array('label'=>'View QuoteItem','url'=>array('view','id'=>$model->qoute_item_id)),
	array('label'=>'Manage QuoteItem','url'=>array('admin')),
);
?>

<h1>Update QuoteItem <?php echo $model->qoute_item_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>