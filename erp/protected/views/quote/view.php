<?php
$this->breadcrumbs=array(
	'Quotes'=>array('index'),
	$model->quote_id,
);

$this->menu=array(
	array('label'=>'List Quote','url'=>array('index')),
	array('label'=>'Create Quote','url'=>array('create')),
	array('label'=>'Update Quote','url'=>array('update','id'=>$model->quote_id)),
	array('label'=>'Delete Quote','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->quote_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Quote','url'=>array('admin')),
);
?>

<h1>View Quote #<?php echo $model->quote_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'quote_id',
		'created_at',
		'updated_at',
		'user_id',
		'total_currency',
		'total',
		'status',
	),
)); ?>
