<?php
$this->breadcrumbs=array(
	'Po Receive Items',
);

$this->menu=array(
	array('label'=>'Create PoReceiveItem','url'=>array('create')),
	array('label'=>'Manage PoReceiveItem','url'=>array('admin')),
);
?>

<h1>Po Receive Items</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
