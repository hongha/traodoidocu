
<p class="danhmuc_tag">Thông tin tài khoản</p>
<?php $i = 1;?>
<?php foreach($criteria as  $data):?>
	<?php  $model=Place::model()->findByPk($data->place_id);?>
	<div class="row">
		<div class="col-sm-3">
			<img class="imageavarar margin-left-15" src="<?php echo Yii::app()->request->baseUrl; ?>/images/images/aa.jpg">
		</div>
		<div class="col-sm-9 row">	
			<div class="col-sm-3 nplr">
				Tên
			</div>
			<div class="col-sm-9">
				
			<?php echo $data->username; ?>
			</div>
			<div class="col-sm-3 nplr">
				Số điện thoại
			</div>
			<div class="col-sm-9">
				<?php echo $data->phone; ?>
			</div>
			<div class="col-sm-3 nplr">
				Email
			</div>
			<div class="col-sm-9"> <?php echo $data->email; ?></div>
			<div class="col-sm-3 nplr">Thông tin</div>
			<div class="col-sm-9"><?php echo $data->profile; ?></div>
			<div class="col-sm-3 nplr">Khu vực</div>
			<div class="col-sm-9"><?php echo $model->name; ?></div>
		</div>

	</div>
	
<p class="danhmuc_tag margin-top-15 border-top">Các bài đã đăng</p>
<?php endforeach;?>	
<div class="padding-left-15">
	
<?php foreach($criteria1 as  $data):?>
	<img class="image-post-profile" src="<?php echo $data->image;?>">
	<div class="">
	<?php echo CHtml::link(CHtml::encode($data->title), array('/post/view', 'id'=>$data->id)); ?>
	</div>
	<a  href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/post/update&id=<?php echo $data->id;?>" role="button"><button class="margin-top-15 btn btn-warning">update</button></a>
	<a  href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/post/delete&id=<?php echo $data->id;?>" role="button"><button class="margin-top-15 btn btn-danger">delete</button></a>
	<hr>
<?php endforeach;?>	
<?php ?>
</div>