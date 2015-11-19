<?php
/* @var $this TestpostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Testposts',
);

$this->menu=array(
	array('label'=>'Create testpost', 'url'=>array('create')),
	array('label'=>'Manage testpost', 'url'=>array('admin')),
);
?>

<h1>Testposts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
