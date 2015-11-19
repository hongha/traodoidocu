<?php
/* @var $this TestpostController */
/* @var $model testpost */

$this->breadcrumbs=array(
	'Testposts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List testpost', 'url'=>array('index')),
	array('label'=>'Manage testpost', 'url'=>array('admin')),
);
?>

<h1>Create testpost</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>