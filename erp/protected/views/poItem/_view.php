<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('po_item_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->po_item_id),array('view','id'=>$data->po_item_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('po_id')); ?>:</b>
	<?php echo CHtml::encode($data->po_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost_currency')); ?>:</b>
	<?php echo CHtml::encode($data->cost_currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost')); ?>:</b>
	<?php echo CHtml::encode($data->cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtotal')); ?>:</b>
	<?php echo CHtml::encode($data->subtotal); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('qty_received')); ?>:</b>
	<?php echo CHtml::encode($data->qty_received); ?>
	<br />

	*/ ?>

</div>