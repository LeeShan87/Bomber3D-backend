<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'bombs'); ?>
		<?php echo $form->textField($model,'bombs'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'range'); ?>
		<?php echo $form->textField($model,'range'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'speed'); ?>
		<?php echo $form->textField($model,'speed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trigger'); ?>
		<?php echo $form->textField($model,'trigger'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wallthrough'); ?>
		<?php echo $form->textField($model,'wallthrough'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bombthrough'); ?>
		<?php echo $form->textField($model,'bombthrough'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bombprof'); ?>
		<?php echo $form->textField($model,'bombprof'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'life'); ?>
		<?php echo $form->textField($model,'life'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->