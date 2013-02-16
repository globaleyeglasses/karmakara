<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'artisan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'address1',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'address2',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'city',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'state',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'country',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'image',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'video',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'craft_id',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'created_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'updated_at',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
