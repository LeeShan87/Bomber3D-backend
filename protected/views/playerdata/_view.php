<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bombs')); ?>:</b>
	<?php echo CHtml::encode($data->bombs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('range')); ?>:</b>
	<?php echo CHtml::encode($data->range); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('speed')); ?>:</b>
	<?php echo CHtml::encode($data->speed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trigger')); ?>:</b>
	<?php echo CHtml::encode($data->trigger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wallthrough')); ?>:</b>
	<?php echo CHtml::encode($data->wallthrough); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bombthrough')); ?>:</b>
	<?php echo CHtml::encode($data->bombthrough); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('bombprof')); ?>:</b>
	<?php echo CHtml::encode($data->bombprof); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('life')); ?>:</b>
	<?php echo CHtml::encode($data->life); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	*/ ?>

</div>