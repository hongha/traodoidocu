<script type="text/javascript" language="javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/ckeditor/ckeditor.js" ></script>
<script type="text/javascript" language="javascript"src="<?php echo Yii::app()->request->baseUrl; ?>/ckfinder/ckfinder.js" ></script>
<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

	<div class="margin-left-15">
		<p>Tên bài đăng</p>
		<?php echo $form->textField($model,'title',array('class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="margin-left-15">
		<p>Ảnh đại diện</p>
		<?php echo $form->textField($model,'image',array('size'=>60,'maxlength'=>300,'id'=>'Image', 'class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'image'); ?>
		<input type="button" id="Browser" class="btn btn-default" value="Chọn ảnh" />
	</div>

	<script type="text/javascript">
	$(function(){
		$("#Browser").click(function(){
			var ckfiner=new CKFinder();
			ckfiner.selectActionFunction = function(fileUrl){
				$("#Image").val(fileUrl);
			};
			ckfiner.popup();
		});
	});
	</script>

	<div class="margin-left-15 margin-right-15">
		<p>Nội dung</p>
		<?php echo $form->textArea($model,'content',array('class'=>'form-control input-traodoi', 'id'=>'editor')); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>
	<script type="text/javascript">CKEDITOR.replace( 'editor'); </script>
	<div class="margin-left-15">
		<p>Từ khóa về sản phẩm</p>
		<?php $this->widget('CAutoComplete', array(
			'model'=>$model,
			'attribute'=>'tags',
			'url'=>array('suggestTags'),
			'multiple'=>true,
			'htmlOptions'=>array('size'=>50),
		)); ?>
		<p class="hint">Bạn có thể chọn nhiều từ khóa cho sản phẩm.</p>
		<?php echo $form->error($model,'tags'); ?>
	</div>

	<div class="margin-left-15">
		<p>Khu vực</p>
		<?php echo $form->dropDownList($model,'status', CHtml::listData(Place::model()->findAll(),'id','name'), array('class'=>'btn btn-default')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
	

	<div class="margin-left-15">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tạo bài đăng' : 'Lưu', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<!--<?php echo $form->dropDownList($model,'status',Lookup::items('PostStatus'),array('class'=>'form-control btn btn-default trangthai')); ?>-->