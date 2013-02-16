<?php
$this->breadcrumbs=array(
	'Quote Items',
);

$this->menu=array(
	array('label'=>'Create QuoteItem','url'=>array('create')),
	array('label'=>'Manage QuoteItem','url'=>array('admin')),
);
?>

<h1>Quote Items</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
