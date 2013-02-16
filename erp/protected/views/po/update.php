<?php
$this->breadcrumbs=array(
	'Pos'=>array('index'),
	$model->po_id=>array('view','id'=>$model->po_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Po','url'=>array('index')),
	array('label'=>'Create Po','url'=>array('create')),
	array('label'=>'View Po','url'=>array('view','id'=>$model->po_id)),
	array('label'=>'Manage Po','url'=>array('admin')),
);
?>

<h1>Update Po <?php echo $model->po_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>