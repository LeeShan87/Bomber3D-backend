<?php
$this->breadcrumbs=array(
	'Donates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Donate', 'url'=>array('index')),
	array('label'=>'Manage Donate', 'url'=>array('admin')),
);
?>

<h1>Create Donate</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>