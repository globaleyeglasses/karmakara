<?php
$this->breadcrumbs=array(
	'Po Items'=>array('index'),
	$model->po_item_id=>array('view','id'=>$model->po_item_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PoItem','url'=>array('index')),
	array('label'=>'Create PoItem','url'=>array('create')),
	array('label'=>'View PoItem','url'=>array('view','id'=>$model->po_item_id)),
	array('label'=>'Manage PoItem','url'=>array('admin')),
);
?>

<h1>Update PoItem <?php echo $model->po_item_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>