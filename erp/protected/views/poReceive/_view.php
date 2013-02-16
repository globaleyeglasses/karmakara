<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('po_receive_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->po_receive_id),array('view','id'=>$data->po_receive_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('po_id')); ?>:</b>
	<?php echo CHtml::encode($data->po_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />


</div>