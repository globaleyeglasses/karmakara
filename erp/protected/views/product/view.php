<?php
$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Product','url'=>array('index')),
	array('label'=>'Create Product','url'=>array('create')),
	array('label'=>'Update Product','url'=>array('update','id'=>$model->product_id)),
	array('label'=>'Delete Product','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->product_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Product','url'=>array('admin')),
);
?>

<h1>View Product #<?php echo $model->product_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'product_id',
		'vendor_id',
		'sku',
		'name',
		'length',
		'width',
		'height',
		'product_weight',
		'shipping_weight',
		'short_description',
		'description',
		'craft_id',
		'artisan_id',
		'status',
		'cost_currency',
		'cost',
		'price_currency',
		'price',
		'small_image',
		'asin',
		'upc',
		'magento_qty',
		'fba_uk_qty',
		'fba_us_qty',
		'reorder_point',
		'total_qty',
		'location_id',
	),
)); ?>
