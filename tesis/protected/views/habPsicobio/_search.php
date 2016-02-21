<?php
/* @var $this HabPsicobioController */
/* @var $model HabPsicobio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_hab'); ?>
		<?php echo $form->textField($model,'id_hab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alcohol'); ?>
		<?php echo $form->textField($model,'alcohol'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chimo'); ?>
		<?php echo $form->textField($model,'chimo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deportes'); ?>
		<?php echo $form->textField($model,'deportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'drogas'); ?>
		<?php echo $form->textField($model,'drogas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ocupacion'); ?>
		<?php echo $form->textField($model,'ocupacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'problemas_familiares'); ?>
		<?php echo $form->textField($model,'problemas_familiares'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rasgos_personales'); ?>
		<?php echo $form->textField($model,'rasgos_personales'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'siesta'); ?>
		<?php echo $form->textField($model,'siesta'); ?>
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