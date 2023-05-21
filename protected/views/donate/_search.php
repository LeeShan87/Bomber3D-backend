<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bombs'); ?>
		<?php echo $form->textField($model,'bombs'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'range'); ?>
		<?php echo $form->textField($model,'range'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'life'); ?>
		<?php echo $form->textField($model,'life'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trigger'); ?>
		<?php echo $form->textField($model,'trigger'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'not_active'); ?>
		<?php echo $form->textField($model,'not_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'month'); ?>
		<?php echo $form->textField($model,'month'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->