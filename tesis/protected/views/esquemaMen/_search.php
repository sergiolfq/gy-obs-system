<?php
/* @var $this EsquemaMenController */
/* @var $model EsquemaMen */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_esq'); ?>
		<?php echo $form->textField($model,'id_esq'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_reg'); ?>
		<?php echo $form->textField($model,'id_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'div1'); ?>
		<?php echo $form->textField($model,'div1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'div2'); ?>
		<?php echo $form->textField($model,'div2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'div3'); ?>
		<?php echo $form->textField($model,'div3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'div4'); ?>
		<?php echo $form->textField($model,'div4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'div5'); ?>
		<?php echo $form->textField($model,'div5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'div6'); ?>
		<?php echo $form->textField($model,'div6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_esq'); ?>
		<?php echo $form->textField($model,'fecha_esq'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs_esq'); ?>
		<?php echo $form->textArea($model,'obs_esq',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mes_esq'); ?>
		<?php echo $form->textField($model,'mes_esq',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->