<div class="col-md-6">
	<img id="tag-image"src="<?php echo Yii::app()->request->baseUrl; ?>/image/dienthoai.jpg">
	<?php echo CHtml::link(CHtml::encode($data->name), array('/post/view', 'id'=>$data->id)); ?>
</div>