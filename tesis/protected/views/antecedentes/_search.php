<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ant'); ?>
		<?php echo $form->textField($model,'id_ant'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_ant_per'); ?>
		<?php echo $form->textField($model,'id_ant_per'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_ant_fam'); ?>
		<?php echo $form->textField($model,'id_ant_fam'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_hab'); ?>
		<?php echo $form->textField($model,'id_hab'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->