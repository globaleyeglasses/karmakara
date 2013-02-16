<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'product_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'vendor_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'sku',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'length',array('class'=>'span5','maxlength'=>8)); ?>

	<?php echo $form->textFieldRow($model,'width',array('class'=>'span5','maxlength'=>8)); ?>

	<?php echo $form->textFieldRow($model,'height',array('class'=>'span5','maxlength'=>8)); ?>

	<?php echo $form->textFieldRow($model,'product_weight',array('class'=>'span5','maxlength'=>8)); ?>

	<?php echo $form->textFieldRow($model,'shipping_weight',array('class'=>'span5','maxlength'=>8)); ?>

	<?php echo $form->textAreaRow($model,'short_description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'craft_id',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'artisan_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cost_currency',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'cost',array('class'=>'span5','maxlength'=>12)); ?>

	<?php echo $form->textFieldRow($model,'price_currency',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'price',array('class'=>'span5','maxlength'=>12)); ?>

	<?php echo $form->textFieldRow($model,'small_image',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'asin',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'upc',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'magento_qty',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fba_uk_qty',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fba_us_qty',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'reorder_point',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'total_qty',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'location_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
