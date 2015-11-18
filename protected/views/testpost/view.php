<?php
/* @var $this TestpostController */
/* @var $model testpost */

$this->breadcrumbs=array(
	'Testposts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List testpost', 'url'=>array('index')),
	array('label'=>'Create testpost', 'url'=>array('create')),
	array('label'=>'Update testpost', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete testpost', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage testpost', 'url'=>array('admin')),
);
?>

<h1>View testpost #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'image',
		'content',
		'tags',
		'status',
		'create_time',
		'update_time',
		'author_id',
	),
)); ?>
