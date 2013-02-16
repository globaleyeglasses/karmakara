<?php
$this->breadcrumbs=array(
	'Po Receives',
);

$this->menu=array(
	array('label'=>'Create PoReceive','url'=>array('create')),
	array('label'=>'Manage PoReceive','url'=>array('admin')),
);
?>

<h1>Po Receives</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
