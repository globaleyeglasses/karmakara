<?php
$this->breadcrumbs=array(
	'Po Receives'=>array('index'),
	$model->po_receive_id,
);

$this->menu=array(
	array('label'=>'List PoReceive','url'=>array('index')),
	array('label'=>'Create PoReceive','url'=>array('create')),
	array('label'=>'Update PoReceive','url'=>array('update','id'=>$model->po_receive_id)),
	array('label'=>'Delete PoReceive','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->po_receive_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PoReceive','url'=>array('admin')),
);
?>

<h1>View PoReceive #<?php echo $model->po_receive_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'po_receive_id',
		'po_id',
		'created_at',
		'updated_at',
	),
)); ?>
