<?php
$this->breadcrumbs=array(
	'Po Receives'=>array('index'),
	$model->po_receive_id=>array('view','id'=>$model->po_receive_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PoReceive','url'=>array('index')),
	array('label'=>'Create PoReceive','url'=>array('create')),
	array('label'=>'View PoReceive','url'=>array('view','id'=>$model->po_receive_id)),
	array('label'=>'Manage PoReceive','url'=>array('admin')),
);
?>

<h1>Update PoReceive <?php echo $model->po_receive_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>