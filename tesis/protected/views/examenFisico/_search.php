<?php
/* @var $this ExamenFisicoController */
/* @var $model ExamenFisico */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_exa'); ?>
		<?php echo $form->textField($model,'id_exa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_genitales_externos'); ?>
		<?php echo $form->textField($model,'id_genitales_externos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_cuello_uterino'); ?>
		<?php echo $form->textField($model,'id_cuello_uterino'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_mat'); ?>
		<?php echo $form->textField($model,'id_mat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_an'); ?>
		<?php echo $form->textField($model,'id_an'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_par'); ?>
		<?php echo $form->textField($model,'id_par'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_his'); ?>
		<?php echo $form->textField($model,'id_his'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->