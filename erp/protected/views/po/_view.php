<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('po_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->po_id),array('view','id'=>$data->po_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quote_id')); ?>:</b>
	<?php echo CHtml::encode($data->quote_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vendor_id')); ?>:</b>
	<?php echo CHtml::encode($data->vendor_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_currency')); ?>:</b>
	<?php echo CHtml::encode($data->total_currency); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping')); ?>:</b>
	<?php echo CHtml::encode($data->shipping); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duty')); ?>:</b>
	<?php echo CHtml::encode($data->duty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taxes')); ?>:</b>
	<?php echo CHtml::encode($data->taxes); ?>
	<br />

	*/ ?>

</div>