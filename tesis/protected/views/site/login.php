<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>



<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<table cellspacing='0'>
<tr> <td '>
<?php  echo CHtml::image(Yii::app()->baseUrl."/images/lock_blue.png ",'imagen candado'); ?>
</td> 

<td>
<h3>Inicio de sesión</h3>



	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'username',array('placeholder'=>'USUARIO')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contraseña'); ?>
		<?php echo $form->passwordField($model,'password',array('placeholder'=>'CONTRASEÑA')); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'recordarme'); ?>
		<?php echo $form->error($model,'recordarme'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Entrar'); ?>
	</div>
	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>
 </td> </tr>
</table>
<?php $this->endWidget(); ?>
</div><!-- form -->

