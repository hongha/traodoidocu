<?php
/* @var $this PostController */
/* @var $model Post */

// $this->breadcrumbs=array(
// 	'Posts'=>array('index'),
// 	'Create',
// );

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<p class=" login danhmuc_tag">Đăng tin mới</p>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>