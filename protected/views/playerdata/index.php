<?php
$this->breadcrumbs=array(
	'Playerdatas',
);

$this->menu=array(
	array('label'=>'Create Playerdata', 'url'=>array('create')),
	array('label'=>'Manage Playerdata', 'url'=>array('admin')),
);
?>

<h1>Playerdatas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
