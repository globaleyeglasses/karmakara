<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'quote-item-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'quote_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'vendor_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'product_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cost_currency',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'cost',array('class'=>'span5','maxlength'=>12)); ?>

	<?php echo $form->textFieldRow($model,'qty',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'subtotal',array('class'=>'span5','maxlength'=>12)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
