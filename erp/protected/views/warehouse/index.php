<?php
$this->breadcrumbs=array(
	'Warehouses',
);

$this->menu=array(
	array('label'=>'Create Warehouse','url'=>array('create')),
	array('label'=>'Manage Warehouse','url'=>array('admin')),
);
?>

<h1>Warehouses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
