<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('qoute_item_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->qoute_item_id),array('view','id'=>$data->qoute_item_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quote_id')); ?>:</b>
	<?php echo CHtml::encode($data->quote_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vendor_id')); ?>:</b>
	<?php echo CHtml::encode($data->vendor_id); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('subtotal')); ?>:</b>
	<?php echo CHtml::encode($data->subtotal); ?>
	<br />

	*/ ?>

</div>