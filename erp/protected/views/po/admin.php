<?php
$this->breadcrumbs=array(
	'Pos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Po','url'=>array('index')),
	array('label'=>'Create Po','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('po-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pos</h1>

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
	'id'=>'po-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'po_id',
		'quote_id',
		'created_at',
		'updated_at',
		'vendor_id',
		'status',
		/*
		'total_currency',
		'total',
		'shipping',
		'duty',
		'taxes',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
