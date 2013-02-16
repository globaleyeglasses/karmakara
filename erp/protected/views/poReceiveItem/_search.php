<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'po_receive_item_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'po_receive_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'po_item_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'qty_received',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
