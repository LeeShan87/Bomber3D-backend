<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'donate-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bombs'); ?>
		<?php echo $form->textField($model,'bombs'); ?>
		<?php echo $form->error($model,'bombs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'range'); ?>
		<?php echo $form->textField($model,'range'); ?>
		<?php echo $form->error($model,'range'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'life'); ?>
		<?php echo $form->textField($model,'life'); ?>
		<?php echo $form->error($model,'life'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trigger'); ?>
		<?php echo $form->textField($model,'trigger'); ?>
		<?php echo $form->error($model,'trigger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'not_active'); ?>
		<?php echo $form->textField($model,'not_active'); ?>
		<?php echo $form->error($model,'not_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'month'); ?>
		<?php echo $form->textField($model,'month'); ?>
		<?php echo $form->error($model,'month'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->