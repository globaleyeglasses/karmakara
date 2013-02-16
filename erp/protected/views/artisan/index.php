<?php
$this->breadcrumbs=array(
	'Artisans',
);

$this->menu=array(
	array('label'=>'Create Artisan','url'=>array('create')),
	array('label'=>'Manage Artisan','url'=>array('admin')),
);
?>

<h1>Artisans</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
