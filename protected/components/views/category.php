<?php foreach($list as  $data):?>
	<!-- <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/post/Tagpost=<?php echo $data->name;?>">
	<p class="category"><?php echo $data->name; ?></p>
	</a>  -->
	<a href="<?php echo Yii::app()->createUrl('post/Tagpost',array('Tagpost'=>$data->name));?>" >
        <p class="category"><?php echo $data->name;?></p>
    </a> 
<?php endforeach;?>