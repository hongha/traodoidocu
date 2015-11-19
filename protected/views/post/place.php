<?php if(sizeof($criteria) > 0){?>
<?php foreach($criteria as  $data):?>
<p class="danhmuc_tag">Bài đăng của: <?php echo $data->username;?></p>
<?php if(sizeof($place) > 0){?>
	<?php foreach($place as  $data1):?>
		<div class="col-md-6">
		<img id="tag-image"src="<?php echo Yii::app()->request->baseUrl; ?><?php echo $data1->image?>">
		<?php echo CHtml::link(CHtml::encode($data1->title), array('/post/view', 'id'=>$data1->id)); ?>
		</div>
	<?php endforeach;?>
	<?php } else {?>
	<p>Người dùng này chưa có bài đăng nào.</p>
<?php }?>
<?php endforeach;?>
<?php } else {?>
	<p>Không có kết quả.</p>
<?php }?>
