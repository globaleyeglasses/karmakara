<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'po_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'quote_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'created_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'updated_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'vendor_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'total_currency',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'total',array('class'=>'span5','maxlength'=>12)); ?>

	<?php echo $form->textFieldRow($model,'shipping',array('class'=>'span5','maxlength'=>12)); ?>

	<?php echo $form->textFieldRow($model,'duty',array('class'=>'span5','maxlength'=>12)); ?>

	<?php echo $form->textFieldRow($model,'taxes',array('class'=>'span5','maxlength'=>12)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
