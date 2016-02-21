<?php
/* @var $this RegistroMController */
/* @var $model RegistroM */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_reg'); ?>
		<?php echo $form->textField($model,'id_reg'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'id_his'); ?>
		<?php //echo $form->textField($model,'id_his'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_reg'); ?>
		<?php echo $form->textField($model,'fecha_reg'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
