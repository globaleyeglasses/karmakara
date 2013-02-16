<?php
$this->breadcrumbs=array(
	'Po Items',
);

$this->menu=array(
	array('label'=>'Create PoItem','url'=>array('create')),
	array('label'=>'Manage PoItem','url'=>array('admin')),
);
?>

<h1>Po Items</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
