<?php
/* @var $this AntPersonalesController */
/* @var $model AntPersonales */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ant_per'); ?>
		<?php echo $form->textField($model,'id_ant_per'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'abenitis'); ?>
		<?php echo $form->textField($model,'abenitis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alergia'); ?>
		<?php echo $form->textField($model,'alergia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amigdalitis'); ?>
		<?php echo $form->textField($model,'amigdalitis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'artritis'); ?>
		<?php echo $form->textField($model,'artritis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asma'); ?>
		<?php echo $form->textField($model,'asma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blenorragia'); ?>
		<?php echo $form->textField($model,'blenorragia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'buba'); ?>
		<?php echo $form->textField($model,'buba'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'catarros'); ?>
		<?php echo $form->textField($model,'catarros'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chagas'); ?>
		<?php echo $form->textField($model,'chagas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chancros'); ?>
		<?php echo $form->textField($model,'chancros'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'difteria'); ?>
		<?php echo $form->textField($model,'difteria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diarreas'); ?>
		<?php echo $form->textField($model,'diarreas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hansen'); ?>
		<?php echo $form->textField($model,'hansen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'influenza'); ?>
		<?php echo $form->textField($model,'influenza'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lechina'); ?>
		<?php echo $form->textField($model,'lechina'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'necatoriasis'); ?>
		<?php echo $form->textField($model,'necatoriasis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'neumonia'); ?>
		<?php echo $form->textField($model,'neumonia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otitis'); ?>
		<?php echo $form->textField($model,'otitis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paludismo'); ?>
		<?php echo $form->textField($model,'paludismo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parasitos'); ?>
		<?php echo $form->textField($model,'parasitos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parotitis'); ?>
		<?php echo $form->textField($model,'parotitis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pleuresia'); ?>
		<?php echo $form->textField($model,'pleuresia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quirurgicos'); ?>
		<?php echo $form->textField($model,'quirurgicos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rinofaringitis'); ?>
		<?php echo $form->textField($model,'rinofaringitis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rubeola'); ?>
		<?php echo $form->textField($model,'rubeola'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sarampion'); ?>
		<?php echo $form->textField($model,'sarampion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sifilis'); ?>
		<?php echo $form->textField($model,'sifilis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tbc'); ?>
		<?php echo $form->textField($model,'tbc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tifoidea'); ?>
		<?php echo $form->textField($model,'tifoidea'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tosferina'); ?>
		<?php echo $form->textField($model,'tosferina'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'traumatismo'); ?>
		<?php echo $form->textField($model,'traumatismo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vacunaciones'); ?>
		<?php echo $form->textField($model,'vacunaciones'); ?>
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