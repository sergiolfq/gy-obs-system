<?php
/* @var $this MunicipioController */
/* @var $model Municipio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_m'); ?>
		<?php echo $form->textField($model,'id_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_m'); ?>
		<?php echo $form->textField($model,'nombre_m',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'num_pob'); ?>
		<?php echo $form->textField($model,'num_pob'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->