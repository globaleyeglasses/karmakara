<?php
$this->breadcrumbs=array(
	'Pos'=>array('index'),
	$model->po_id,
);

$this->menu=array(
	array('label'=>'List Po','url'=>array('index')),
	array('label'=>'Create Po','url'=>array('create')),
	array('label'=>'Update Po','url'=>array('update','id'=>$model->po_id)),
	array('label'=>'Delete Po','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->po_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Po','url'=>array('admin')),
);
?>

<h1>View Po #<?php echo $model->po_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'po_id',
		'quote_id',
		'created_at',
		'updated_at',
		'vendor_id',
		'status',
		'total_currency',
		'total',
		'shipping',
		'duty',
		'taxes',
	),
)); ?>
