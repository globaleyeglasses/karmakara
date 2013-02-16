<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('po_receive_item_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->po_receive_item_id),array('view','id'=>$data->po_receive_item_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('po_receive_id')); ?>:</b>
	<?php echo CHtml::encode($data->po_receive_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('po_item_id')); ?>:</b>
	<?php echo CHtml::encode($data->po_item_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty_received')); ?>:</b>
	<?php echo CHtml::encode($data->qty_received); ?>
	<br />


</div>