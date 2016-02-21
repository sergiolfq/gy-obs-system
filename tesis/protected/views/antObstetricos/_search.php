<?php
/* @var $this AntObstetricosController */
/* @var $model AntObstetricos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ant_obs'); ?>
		<?php echo $form->textField($model,'id_ant_obs'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anyo'); ?>
		<?php echo $form->textField($model,'anyo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_parto'); ?>
		<?php echo $form->textField($model,'tipo_parto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiempo_trabajo'); ?>
		<?php echo $form->textField($model,'tiempo_trabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hemorragia'); ?>
		<?php echo $form->textField($model,'hemorragia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lesion_perinial'); ?>
		<?php echo $form->textField($model,'lesion_perinial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'toxemia'); ?>
		<?php echo $form->textField($model,'toxemia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'puerperio'); ?>
		<?php echo $form->textField($model,'puerperio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peso_nino'); ?>
		<?php echo $form->textField($model,'peso_nino'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vivo'); ?>
		<?php echo $form->textField($model,'vivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_ant'); ?>
		<?php echo $form->textField($model,'id_ant'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->