<div class="col-md-6">
	<img id="tag-image"src="<?php echo Yii::app()->request->baseUrl; ?><?php echo $data->image?>">
	<?php echo CHtml::link(CHtml::encode($data->title), array('/post/view', 'id'=>$data->id)); ?>
</div>