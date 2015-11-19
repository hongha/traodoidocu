<div class="khung">
	
<?php foreach($criteria as  $data):?>
	<div class="row titlepost ">
	<?php echo CHtml::link(CHtml::encode($data->title), array('/post/view', 'id'=>$data->id)); ?>
	</div>
	<a class="updatepost" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/post/update&id=<?php echo $data->id?>" role="button">update</a>
	<div class="deletepost">delete</div>
	<div class="row"><?php echo $data->content; ?> </div>
	<hr>
<?php endforeach;?>	
<?php ?>
</div>