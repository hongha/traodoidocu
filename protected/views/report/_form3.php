<?php
/* @var $this ReportController */
/* @var $model Report */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'report-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		
		<?php echo $form->textField($model,'id_post', array('class'=>'hidden')); ?>
		<?php echo $form->error($model,'id_post'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->textField($model,'id_user', array('class'=>'hidden')); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row">
	
		<?php echo $form->textField($model,'id_post_traodoi', array('class'=>'hidden')); ?>
		<?php echo $form->error($model,'id_post_traodoi'); ?>
	</div>

	<div class="row">
		<p>Lời nhắn từ đối tác</p>
		<?php echo $model->content;?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50,'class'=>'hidden')); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">

		<?php echo $form->textField($model,'status',array('class'=>'hidden','value'=>'1')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<p>Để lại lời nhắn</p>
		<?php echo $form->textArea($model,'message',array('rows'=>6, 'cols'=>50, 'class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'message'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Xác nhận trao đổi',array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->