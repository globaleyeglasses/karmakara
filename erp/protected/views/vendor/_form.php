<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'vendor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>




	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'address1',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'address2',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'city',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'state',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'country',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','prepend'=>'@','maxlength'=>200)); ?>

	<?php echo $form->dropDownList($model,'status',array('1'=>'active','0'=>'inactive'),array('class'=>'span2')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
