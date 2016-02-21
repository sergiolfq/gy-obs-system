<?php
/* @var $this AntFamiliaresController */
/* @var $model AntFamiliares */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ant-familiares-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Marque lo encontrado anormal y anote sus observaciones </p>

	<?php echo $form->errorSummary($model); ?>

	<div class="span-4">
		<?php echo $form->labelEx($model,'alergia'); ?>
		<?php echo $form->checkBox($model,'alergia'); ?>
		<?php echo $form->error($model,'alergia'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'artritis'); ?>
		<?php echo $form->checkBox($model,'artritis'); ?>
		<?php echo $form->error($model,'artritis'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'asma'); ?>
		<?php echo $form->checkBox($model,'asma'); ?>
		<?php echo $form->error($model,'asma'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'cancer'); ?>
		<?php echo $form->checkBox($model,'cancer'); ?>
		<?php echo $form->error($model,'cancer'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'cardiovasculares'); ?>
		<?php echo $form->checkBox($model,'cardiovasculares'); ?>
		<?php echo $form->error($model,'cardiovasculares'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'diabetes'); ?>
		<?php echo $form->checkBox($model,'diabetes'); ?>
		<?php echo $form->error($model,'diabetes'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'enfermedades_digestivas'); ?>
		<?php echo $form->checkBox($model,'enfermedades_digestivas'); ?>
		<?php echo $form->error($model,'enfermedades_digestivas'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'enfermedades_renales'); ?>
		<?php echo $form->checkBox($model,'enfermedades_renales'); ?>
		<?php echo $form->error($model,'enfermedades_renales'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'intoxicacion'); ?>
		<?php echo $form->checkBox($model,'intoxicacion'); ?>
		<?php echo $form->error($model,'intoxicacion'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'neuromentales'); ?>
		<?php echo $form->checkBox($model,'neuromentales'); ?>
		<?php echo $form->error($model,'neuromentales'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'sifilis'); ?>
		<?php echo $form->checkBox($model,'sifilis'); ?>
		<?php echo $form->error($model,'sifilis'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'tbc'); ?>
		<?php echo $form->checkBox($model,'tbc'); ?>
		<?php echo $form->error($model,'tbc'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'tifoidea'); ?>
		<?php echo $form->checkBox($model,'tifoidea'); ?>
		<?php echo $form->error($model,'tifoidea'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'tosferina'); ?>
		<?php echo $form->checkBox($model,'tosferina'); ?>
		<?php echo $form->error($model,'tosferina'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'traumatismo'); ?>
		<?php echo $form->checkBox($model,'traumatismo'); ?>
		<?php echo $form->error($model,'traumatismo'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'vacunaciones'); ?>
		<?php echo $form->checkBox($model,'vacunaciones'); ?>
		<?php echo $form->error($model,'vacunaciones'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'otros'); ?>
		<?php echo $form->checkBox($model,'otros'); ?>
		<?php echo $form->error($model,'otros'); ?>
	</div>

	<div class="span-8">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>3, 'cols'=>75)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>
       
	<div class="span-8 buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
              <?php echo CHtml::button('Volver sin hacer cambios', array('submit' => array('historia/update','id'=>yii::app()->user->ultimaHistoria))); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
