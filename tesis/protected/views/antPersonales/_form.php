<?php
/* @var $this AntPersonalesController */
/* @var $model AntPersonales */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ant-personales-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<p class="note">Marque lo encontrado anormal y anote sus observaciones </p>


	<?php echo $form->errorSummary($model); ?>

	<div class="span-2">
		<?php echo $form->labelEx($model,'abenitis'); ?>
		<?php echo $form->checkBox($model,'abenitis'); ?>
		<?php echo $form->error($model,'abenitis'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'alergia'); ?>
		<?php echo $form->checkBox($model,'alergia'); ?>
		<?php echo $form->error($model,'alergia'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'amigdalitis'); ?>
		<?php echo $form->checkBox($model,'amigdalitis'); ?>
		<?php echo $form->error($model,'amigdalitis'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'artritis'); ?>
		<?php echo $form->checkBox($model,'artritis'); ?>
		<?php echo $form->error($model,'artritis'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'asma'); ?>
		<?php echo $form->checkBox($model,'asma'); ?>
		<?php echo $form->error($model,'asma'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'blenorragia'); ?>
		<?php echo $form->checkBox($model,'blenorragia'); ?>
		<?php echo $form->error($model,'blenorragia'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'buba'); ?>
		<?php echo $form->checkBox($model,'buba'); ?>
		<?php echo $form->error($model,'buba'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'catarros'); ?>
		<?php echo $form->checkBox($model,'catarros'); ?>
		<?php echo $form->error($model,'catarros'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'chagas'); ?>
		<?php echo $form->checkBox($model,'chagas'); ?>
		<?php echo $form->error($model,'chagas'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'chancros'); ?>
		<?php echo $form->checkBox($model,'chancros'); ?>
		<?php echo $form->error($model,'chancros'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'difteria'); ?>
		<?php echo $form->checkBox($model,'difteria'); ?>
		<?php echo $form->error($model,'difteria'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'diarreas'); ?>
		<?php echo $form->checkBox($model,'diarreas'); ?>
		<?php echo $form->error($model,'diarreas'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'hansen'); ?>
		<?php echo $form->checkBox($model,'hansen'); ?>
		<?php echo $form->error($model,'hansen'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'influenza'); ?>
		<?php echo $form->checkBox($model,'influenza'); ?>
		<?php echo $form->error($model,'influenza'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'lechina'); ?>
		<?php echo $form->checkBox($model,'lechina'); ?>
		<?php echo $form->error($model,'lechina'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'necatoriasis'); ?>
		<?php echo $form->checkBox($model,'necatoriasis'); ?>
		<?php echo $form->error($model,'necatoriasis'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'neumonia'); ?>
		<?php echo $form->checkBox($model,'neumonia'); ?>
		<?php echo $form->error($model,'neumonia'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'otitis'); ?>
		<?php echo $form->checkBox($model,'otitis'); ?>
		<?php echo $form->error($model,'otitis'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'paludismo'); ?>
		<?php echo $form->checkBox($model,'paludismo'); ?>
		<?php echo $form->error($model,'paludismo'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'parasitos'); ?>
		<?php echo $form->checkBox($model,'parasitos'); ?>
		<?php echo $form->error($model,'parasitos'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'parotitis'); ?>
		<?php echo $form->checkBox($model,'parotitis'); ?>
		<?php echo $form->error($model,'parotitis'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'pleuresia'); ?>
		<?php echo $form->checkBox($model,'pleuresia'); ?>
		<?php echo $form->error($model,'pleuresia'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'quirurgicos'); ?>
		<?php echo $form->checkBox($model,'quirurgicos'); ?>
		<?php echo $form->error($model,'quirurgicos'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'rinofaringitis'); ?>
		<?php echo $form->checkBox($model,'rinofaringitis'); ?>
		<?php echo $form->error($model,'rinofaringitis'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'rubeola'); ?>
		<?php echo $form->checkBox($model,'rubeola'); ?>
		<?php echo $form->error($model,'rubeola'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'sarampion'); ?>
		<?php echo $form->checkBox($model,'sarampion'); ?>
		<?php echo $form->error($model,'sarampion'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'sifilis'); ?>
		<?php echo $form->checkBox($model,'sifilis'); ?>
		<?php echo $form->error($model,'sifilis'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'tbc'); ?>
		<?php echo $form->checkBox($model,'tbc'); ?>
		<?php echo $form->error($model,'tbc'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'tifoidea'); ?>
		<?php echo $form->checkBox($model,'tifoidea'); ?>
		<?php echo $form->error($model,'tifoidea'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'tosferina'); ?>
		<?php echo $form->checkBox($model,'tosferina'); ?>
		<?php echo $form->error($model,'tosferina'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'traumatismo'); ?>
		<?php echo $form->checkBox($model,'traumatismo'); ?>
		<?php echo $form->error($model,'traumatismo'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'vacunaciones'); ?>
		<?php echo $form->checkBox($model,'vacunaciones'); ?>
		<?php echo $form->error($model,'vacunaciones'); ?>
	</div>

	<div class="span-2">
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

              <?php //echo CHtml::link("Volver sin hacer cambios",array("historia/update/",'class'=>'button','id'=>yii::app()->user->ultimaHistoria));?>
              <?php echo CHtml::button('Volver sin hacer cambios', array('submit' => array('historia/update','id'=>yii::app()->user->ultimaHistoria))); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
