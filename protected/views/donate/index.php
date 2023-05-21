<?php
$this->breadcrumbs=array(
	'Donates',
);

$this->menu=array(
	array('label'=>'Create Donate', 'url'=>array('create')),
	array('label'=>'Manage Donate', 'url'=>array('admin')),
);
?>

<h1>Donates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
