<?php
/* @var $this AnexoController */
/* @var $model Anexo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'anexo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dolor'); ?>
		<?php echo $form->textField($model,'dolor'); ?>
		<?php echo $form->error($model,'dolor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'empastamiento'); ?>
		<?php echo $form->textField($model,'empastamiento'); ?>
		<?php echo $form->error($model,'empastamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tamano'); ?>
		<?php echo $form->textField($model,'tamano'); ?>
		<?php echo $form->error($model,'tamano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tumoraciones'); ?>
		<?php echo $form->textField($model,'tumoraciones'); ?>
		<?php echo $form->error($model,'tumoraciones'); ?>
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