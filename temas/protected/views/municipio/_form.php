<?php
/* @var $this MunicipioController */
/* @var $model Municipio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'municipio-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_m'); ?>
		<?php echo $form->textField($model,'nombre_m',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre_m'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num_pob'); ?>
		<?php echo $form->textField($model,'num_pob'); ?>
		<?php echo $form->error($model,'num_pob'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->