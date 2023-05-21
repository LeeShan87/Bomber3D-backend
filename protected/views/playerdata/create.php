<?php
$this->breadcrumbs=array(
	'Playerdatas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Playerdata', 'url'=>array('index')),
	array('label'=>'Manage Playerdata', 'url'=>array('admin')),
);
?>

<h1>Create Playerdata</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>