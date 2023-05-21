<?php
$this->breadcrumbs=array(
	'Playerdatas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Playerdata', 'url'=>array('index')),
	array('label'=>'Create Playerdata', 'url'=>array('create')),
	array('label'=>'View Playerdata', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Playerdata', 'url'=>array('admin')),
);
?>

<h1>Update Playerdata <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>