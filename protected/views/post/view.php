<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>
<p class="danhmuc_tag">Xem chi tiết sản phẩm</p>

<img class="col-md-4 margin-top-8" src="<?php echo Yii::app()->request->baseUrl; ?><?php echo $model->image;?>">
<span class="title-post">
<?php
echo $model->title;
?>
</span>
<span class="post-content">
<?php
echo $model->content;
?>
</span>
<span class="post-time">
<?php
echo $model->create_time;
 ?>
 </span>
 <br/>
 <br/>
<br/>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/report/create&id=<?php echo $model->id;?>&iduser=<?php echo Yii::app()->user->id;?>"><button class="btn btn-default">Trao đổi</button>
</a>
<div class="col-md-12 margin-top-15">
<?php
	$this->renderPartial('comment.views.comment.commentList',array(
		'model'=>$model
		));
?>
</div>