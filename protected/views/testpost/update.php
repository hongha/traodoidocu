<?php
/* @var $this TestpostController */
/* @var $model testpost */

$this->breadcrumbs=array(
	'Testposts'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List testpost', 'url'=>array('index')),
	array('label'=>'Create testpost', 'url'=>array('create')),
	array('label'=>'View testpost', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage testpost', 'url'=>array('admin')),
);
?>

<h1>Update testpost <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>