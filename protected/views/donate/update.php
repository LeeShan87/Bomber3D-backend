<?php
$this->breadcrumbs=array(
	'Donates'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Donate', 'url'=>array('index')),
	array('label'=>'Create Donate', 'url'=>array('create')),
	array('label'=>'View Donate', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Donate', 'url'=>array('admin')),
);
?>

<h1>Update Donate <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>