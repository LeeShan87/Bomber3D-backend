<div class="view">

	<?php echo CHtml::link("Buy it", array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bombs')); ?>:</b>
	<?php echo CHtml::encode($data->bombs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('range')); ?>:</b>
	<?php echo CHtml::encode($data->range); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('life')); ?>:</b>
	<?php echo CHtml::encode($data->life); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trigger')); ?>:</b>
	<?php echo CHtml::encode($data->trigger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('month')); ?>:</b>
	<?php echo CHtml::encode($data->month); ?>
	<br />

</div>