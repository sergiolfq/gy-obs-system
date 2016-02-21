<?php
/* @var $this GenitalesExternosController */
/* @var $model GenitalesExternos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_genitales_externos'); ?>
		<?php echo $form->textField($model,'id_genitales_externos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'labios'); ?>
		<?php echo $form->textField($model,'labios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g_bartholine'); ?>
		<?php echo $form->textField($model,'g_bartholine'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g_skane'); ?>
		<?php echo $form->textField($model,'g_skane'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meato_uretral'); ?>
		<?php echo $form->textField($model,'meato_uretral'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'himen'); ?>
		<?php echo $form->textField($model,'himen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perine'); ?>
		<?php echo $form->textField($model,'perine'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vagina'); ?>
		<?php echo $form->textField($model,'vagina'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inspeccion_esfuerzo'); ?>
		<?php echo $form->textField($model,'inspeccion_esfuerzo'); ?>
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