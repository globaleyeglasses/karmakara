<?php
$this->breadcrumbs=array(
	'Po Receive Items'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PoReceiveItem','url'=>array('index')),
	array('label'=>'Create PoReceiveItem','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('po-receive-item-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Po Receive Items</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'po-receive-item-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'po_receive_item_id',
		'po_receive_id',
		'po_item_id',
		'qty_received',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
