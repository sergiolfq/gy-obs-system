<?php
/* @var $this CuelloUterinoController */
/* @var $model CuelloUterino */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_cuello_uterino'); ?>
		<?php echo $form->textField($model,'id_cuello_uterino'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orificio'); ?>
		<?php echo $form->textField($model,'orificio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flujos'); ?>
		<?php echo $form->textField($model,'flujos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cervical'); ?>
		<?php echo $form->textField($model,'cervical'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sangre'); ?>
		<?php echo $form->textField($model,'sangre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cervicitis'); ?>
		<?php echo $form->textField($model,'cervicitis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'leuroplasia'); ?>
		<?php echo $form->textField($model,'leuroplasia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'polipos'); ?>
		<?php echo $form->textField($model,'polipos'); ?>
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