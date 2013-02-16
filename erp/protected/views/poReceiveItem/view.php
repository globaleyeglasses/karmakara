<?php
$this->breadcrumbs=array(
	'Po Receive Items'=>array('index'),
	$model->po_receive_item_id,
);

$this->menu=array(
	array('label'=>'List PoReceiveItem','url'=>array('index')),
	array('label'=>'Create PoReceiveItem','url'=>array('create')),
	array('label'=>'Update PoReceiveItem','url'=>array('update','id'=>$model->po_receive_item_id)),
	array('label'=>'Delete PoReceiveItem','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->po_receive_item_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PoReceiveItem','url'=>array('admin')),
);
?>

<h1>View PoReceiveItem #<?php echo $model->po_receive_item_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'po_receive_item_id',
		'po_receive_id',
		'po_item_id',
		'qty_received',
	),
)); ?>
