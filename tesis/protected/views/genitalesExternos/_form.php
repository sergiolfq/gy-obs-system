<?php
/* @var $this GenitalesExternosController */
/* @var $b GenitalesExternos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'genitales-externos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($b); ?>

	<div class="row">
		<?php echo $form->labelEx($b,'labios'); ?>
		<?php echo $form->textField($b,'labios'); ?>
		<?php echo $form->error($b,'labios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($b,'g_bartholine'); ?>
		<?php echo $form->textField($b,'g_bartholine'); ?>
		<?php echo $form->error($b,'g_bartholine'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($b,'g_skane'); ?>
		<?php echo $form->textField($b,'g_skane'); ?>
		<?php echo $form->error($b,'g_skane'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($b,'meato_uretral'); ?>
		<?php echo $form->textField($b,'meato_uretral'); ?>
		<?php echo $form->error($b,'meato_uretral'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($b,'himen'); ?>
		<?php echo $form->textField($b,'himen'); ?>
		<?php echo $form->error($b,'himen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($b,'perine'); ?>
		<?php echo $form->textField($b,'perine'); ?>
		<?php echo $form->error($b,'perine'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($b,'vagina'); ?>
		<?php echo $form->textField($b,'vagina'); ?>
		<?php echo $form->error($b,'vagina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($b,'inspeccion_esfuerzo'); ?>
		<?php echo $form->textField($b,'inspeccion_esfuerzo'); ?>
		<?php echo $form->error($b,'inspeccion_esfuerzo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($b,'otros'); ?>
		<?php echo $form->textField($b,'otros'); ?>
		<?php echo $form->error($b,'otros'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($b,'observaciones'); ?>
		<?php echo $form->textField($b,'observaciones',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($b,'observaciones'); ?>
	</div>

       <label>Cuello uterino</label>

	<div class="row buttons">
		<?php echo CHtml::submitButton($a->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
