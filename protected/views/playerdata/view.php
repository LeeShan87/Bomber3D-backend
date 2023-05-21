<?php
$this->breadcrumbs=array(
	'Playerdatas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Playerdata', 'url'=>array('index')),
	array('label'=>'Create Playerdata', 'url'=>array('create')),
	array('label'=>'Update Playerdata', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Playerdata', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Playerdata', 'url'=>array('admin')),
);
?>

<h1>View Playerdata #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'bombs',
		'range',
		'speed',
		'trigger',
		'wallthrough',
		'bombthrough',
		'bombprof',
		'life',
		'user_id',
		'id',
	),
)); ?>
