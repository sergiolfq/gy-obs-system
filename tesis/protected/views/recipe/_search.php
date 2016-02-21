<?php
/* @var $this RecipeController */
/* @var $model Recipe */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_rec'); ?>
		<?php echo $form->textField($model,'id_rec'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_his'); ?>
		<?php echo $form->textField($model,'id_his'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tratamiento'); ?>
		<?php echo $form->textField($model,'tratamiento',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indicaciones'); ?>
		<?php echo $form->textField($model,'indicaciones',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->