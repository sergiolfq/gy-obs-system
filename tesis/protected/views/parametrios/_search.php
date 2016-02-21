<?php
/* @var $this ParametriosController */
/* @var $model Parametrios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_par'); ?>
		<?php echo $form->textField($model,'id_par'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'induracion'); ?>
		<?php echo $form->textField($model,'induracion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tumores'); ?>
		<?php echo $form->textField($model,'tumores'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otros'); ?>
		<?php echo $form->textField($model,'otros'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->