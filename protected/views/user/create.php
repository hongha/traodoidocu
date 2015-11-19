<?php
/* @var $this UserController */
/* @var $model User */


$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<p class=" login danhmuc_tag">Đăng kí</p>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>