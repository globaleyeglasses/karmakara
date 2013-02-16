<?php
$this->breadcrumbs=array(
	'Crafts',
);

$this->menu=array(
	array('label'=>'Create Craft','url'=>array('create')),
	array('label'=>'Manage Craft','url'=>array('admin')),
);
?>

<h1>Crafts</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
