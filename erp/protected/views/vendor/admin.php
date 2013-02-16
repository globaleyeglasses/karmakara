<?php
$this->breadcrumbs=array(
	'Vendors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Vendor','url'=>array('index')),
	array('label'=>'Create Vendor','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('vendor-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Vendors</h1>

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
	'id'=>'vendor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'vendor_id',
		'name',
		'address1',
		
		'address2',
		'city',
		'state',
		'country',
		'phone',
		'email',
		array('name'=>'status',  'value'=>array($model,'renderStatus'), 'filter'=>array(1=>'active',2=>'inactive'	),
		),
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
