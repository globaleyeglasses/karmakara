<?php
$this->breadcrumbs=array(
	'Quote Items'=>array('index'),
	$model->qoute_item_id,
);

$this->menu=array(
	array('label'=>'List QuoteItem','url'=>array('index')),
	array('label'=>'Create QuoteItem','url'=>array('create')),
	array('label'=>'Update QuoteItem','url'=>array('update','id'=>$model->qoute_item_id)),
	array('label'=>'Delete QuoteItem','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->qoute_item_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage QuoteItem','url'=>array('admin')),
);
?>

<h1>View QuoteItem #<?php echo $model->qoute_item_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'qoute_item_id',
		'quote_id',
		'vendor_id',
		'product_id',
		'cost_currency',
		'cost',
		'qty',
		'subtotal',
	),
)); ?>
