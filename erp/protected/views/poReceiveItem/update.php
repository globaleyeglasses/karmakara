<?php
$this->breadcrumbs=array(
	'Po Receive Items'=>array('index'),
	$model->po_receive_item_id=>array('view','id'=>$model->po_receive_item_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PoReceiveItem','url'=>array('index')),
	array('label'=>'Create PoReceiveItem','url'=>array('create')),
	array('label'=>'View PoReceiveItem','url'=>array('view','id'=>$model->po_receive_item_id)),
	array('label'=>'Manage PoReceiveItem','url'=>array('admin')),
);
?>

<h1>Update PoReceiveItem <?php echo $model->po_receive_item_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>