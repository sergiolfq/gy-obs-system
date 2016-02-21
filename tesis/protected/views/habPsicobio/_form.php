<?php
/* @var $this HabPsicobioController */
/* @var $model HabPsicobio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hab-psicobio-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<p class="note">Marque lo encontrado anormal y anote sus observaciones </p>


	<?php echo $form->errorSummary($model); ?>

	<div class="span-2">
		<?php echo $form->labelEx($model,'alcohol'); ?>
		<?php echo $form->checkBox($model,'alcohol'); ?>
		<?php echo $form->error($model,'alcohol'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'chimo'); ?>
		<?php echo $form->checkBox($model,'chimo'); ?>
		<?php echo $form->error($model,'chimo'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'deportes'); ?>
		<?php echo $form->checkBox($model,'deportes'); ?>
		<?php echo $form->error($model,'deportes'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'drogas'); ?>
		<?php echo $form->checkBox($model,'drogas'); ?>
		<?php echo $form->error($model,'drogas'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'ocupacion'); ?>
		<?php echo $form->checkBox($model,'ocupacion'); ?>
		<?php echo $form->error($model,'ocupacion'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'problemas_familiares'); ?>
		<?php echo $form->checkBox($model,'problemas_familiares'); ?>
		<?php echo $form->error($model,'problemas_familiares'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'rasgos_personales'); ?>
		<?php echo $form->checkBox($model,'rasgos_personales'); ?>
		<?php echo $form->error($model,'rasgos_personales'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'siesta'); ?>
		<?php echo $form->checkBox($model,'siesta'); ?>
		<?php echo $form->error($model,'siesta'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'otros'); ?>
		<?php echo $form->checkBox($model,'otros'); ?>
		<?php echo $form->error($model,'otros'); ?>
	</div>

	
	<div class="row span-20">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('cols'=>80,'rows'=>2)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>
<table>
	<tr><div class="row span-9 buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
              <?php echo CHtml::button('Volver a Historia sin hacer cambios', array('submit' => array('historia/update','id'=>yii::app()->user->ultimaHistoria))); ?>
	</div></tr>
</table>
<?php $this->endWidget(); ?>

</div><!-- form -->
