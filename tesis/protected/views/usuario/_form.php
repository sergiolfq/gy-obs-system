<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ci'); ?>
		<?php echo $form->textField($model,'ci',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ci'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'registro'); ?>
		<?php echo $form->textField($model,'registro',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'registro'); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'Usuario'); ?>
        <?php   if($model->name!='super'){   ?>
		<?php echo $form->textField($model,'name',array('size'=>20,'maxlength'=>20)); ?>
                <?php       } else {  ?>
		<?php echo $form->textField($model,'name',array('size'=>20,'maxlength'=>20,'readonly'=>true)); ?>
		<?php } ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">

		<?php echo $form->labelEx($model,'contraseña',array('title'=>'Minimo 6 caracteres , al momento de editar se remplazará su clave por la actual')); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	
	<div class="row">
	<label> Repetir contraseña </label> </br>
	<input type="password" id="npassword">
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rol'); ?>
		<?php echo $form->textField($model,'rol'); ?>
		<?php echo $form->error($model,'rol'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Modificar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
