<?php
/* @var $this ReportController */
/* @var $model Report */
/* @var $form CActiveForm */
?>

<div class="form margin-left-15">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'report-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($model); ?>
	<?php
	$idUser = Yii::app()->user->id;
	?>

	<div class="row">
	
		<?php echo $form->textField($model,'id_post',array('class'=>'hidden','value'=>$id)); ?>
		<?php echo $form->error($model,'id_post'); ?>
	</div>

	<div class="row">
		<?php echo $form->textField($model,'id_user',array('class'=>'hidden','value'=>$idUser)); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row">
		<p>Chọn đồ vật muốn trao đổi</p>
		<?php foreach($criteria as  $data):?>
		<?php
		$id_traodoi=$data->id;
		$name=$data->title; ?>

		<?php 
		//echo $form->radioButton($model,'id_post_traodoi',array('value'=>$id_traodoi)); 

		echo $form->radioButton($model, 'id_post_traodoi', array(
    	'value'=>$id_traodoi,
   		'uncheckValue'=>null
		));
 
		echo $name;
		?>
		<br/>
		<br/>
		<?php endforeach;?>	
		<?php echo $form->error($model,'id_post_traodoi'); ?>
	</div>

	<div class="row">
		<p>Nội dung muốn nhắn</p>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50, 'class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
	
		<?php echo $form->textField($model,'status',array('class'=>'hidden','value'=>'0')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Xác nhận' : 'Xác nhận',array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->