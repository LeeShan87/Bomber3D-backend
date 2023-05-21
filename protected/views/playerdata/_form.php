<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'playerdata-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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
		<?php echo $form->labelEx($model,'speed'); ?>
		<?php echo $form->textField($model,'speed'); ?>
		<?php echo $form->error($model,'speed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trigger'); ?>
		<?php echo $form->textField($model,'trigger'); ?>
		<?php echo $form->error($model,'trigger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wallthrough'); ?>
		<?php echo $form->textField($model,'wallthrough'); ?>
		<?php echo $form->error($model,'wallthrough'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bombthrough'); ?>
		<?php echo $form->textField($model,'bombthrough'); ?>
		<?php echo $form->error($model,'bombthrough'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bombprof'); ?>
		<?php echo $form->textField($model,'bombprof'); ?>
		<?php echo $form->error($model,'bombprof'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'life'); ?>
		<?php echo $form->textField($model,'life'); ?>
		<?php echo $form->error($model,'life'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->