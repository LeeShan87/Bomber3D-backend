<?php
$this->breadcrumbs=array(
	'Donates'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Donate', 'url'=>array('index')),
	array('label'=>'Create Donate', 'url'=>array('create')),
	array('label'=>'Update Donate', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Donate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Donate', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->description; ?></h1>
<?php echo CHtml::link("Buy it", array('buyit', 'id'=>$model->Id)); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'description',
		'bombs',
		'range',
		'life',
		'trigger',
		'price',
		'month',
	),
)); ?>
<?php echo CHtml::link("Back", Yii::app()->createUrl('donate')); ?>
	
