<?php
/* @var $this AnexoController */
/* @var $model Anexo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_an'); ?>
		<?php echo $form->textField($model,'id_an'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dolor'); ?>
		<?php echo $form->textField($model,'dolor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'empastamiento'); ?>
		<?php echo $form->textField($model,'empastamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tamano'); ?>
		<?php echo $form->textField($model,'tamano'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tumoraciones'); ?>
		<?php echo $form->textField($model,'tumoraciones'); ?>
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