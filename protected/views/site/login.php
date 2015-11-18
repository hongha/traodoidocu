<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

/*$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
*/
?>
<p class=" login danhmuc_tag">Đăng nhập</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	<div class=" form-group margin-left-15">
		<p>Tài khoản</p>
		<?php echo $form->textField($model,'username',array('class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class=" form-group margin-left-15">
		<p>Mật khẩu</p>
		<?php echo $form->passwordField($model,'password', array('class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class=" rememberMe margin-left-15">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class=" margin-left-15">
		<?php echo CHtml::submitButton('Đăng nhập', array('class'=>' btn-default btn')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
