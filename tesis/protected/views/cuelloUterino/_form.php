<?php
/* @var $this CuelloUterinoController */
/* @var $model CuelloUterino */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cuello-uterino-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'orificio'); ?>
		<?php echo $form->textField($model,'orificio'); ?>
		<?php echo $form->error($model,'orificio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flujos'); ?>
		<?php echo $form->textField($model,'flujos'); ?>
		<?php echo $form->error($model,'flujos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cervical'); ?>
		<?php echo $form->textField($model,'cervical'); ?>
		<?php echo $form->error($model,'cervical'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sangre'); ?>
		<?php echo $form->textField($model,'sangre'); ?>
		<?php echo $form->error($model,'sangre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cervicitis'); ?>
		<?php echo $form->textField($model,'cervicitis'); ?>
		<?php echo $form->error($model,'cervicitis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'leuroplasia'); ?>
		<?php echo $form->textField($model,'leuroplasia'); ?>
		<?php echo $form->error($model,'leuroplasia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'polipos'); ?>
		<?php echo $form->textField($model,'polipos'); ?>
		<?php echo $form->error($model,'polipos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otros'); ?>
		<?php echo $form->textField($model,'otros'); ?>
		<?php echo $form->error($model,'otros'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->