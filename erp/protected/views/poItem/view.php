<?php
$this->breadcrumbs=array(
	'Po Items'=>array('index'),
	$model->po_item_id,
);

$this->menu=array(
	array('label'=>'List PoItem','url'=>array('index')),
	array('label'=>'Create PoItem','url'=>array('create')),
	array('label'=>'Update PoItem','url'=>array('update','id'=>$model->po_item_id)),
	array('label'=>'Delete PoItem','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->po_item_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PoItem','url'=>array('admin')),
);
?>

<h1>View PoItem #<?php echo $model->po_item_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'po_item_id',
		'po_id',
		'product_id',
		'cost_currency',
		'cost',
		'qty',
		'subtotal',
		'qty_received',
	),
)); ?>
