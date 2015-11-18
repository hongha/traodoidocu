<?php
/* @var $this ReportController */
/* @var $model Report */

$this->breadcrumbs=array(
	'Reports'=>array('index'),
	'Create',
);

?>
<p class="danhmuc_tag">Xác nhận trao đổi</p>
<?php $this->renderPartial('_form2', array('model'=>$model,'id'=>$id, 'criteria'=>$criteria)); ?>