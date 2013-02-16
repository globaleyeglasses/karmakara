<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('location_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->location_id),array('view','id'=>$data->location_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rack_id')); ?>:</b>
	<?php echo CHtml::encode($data->rack_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />


</div>