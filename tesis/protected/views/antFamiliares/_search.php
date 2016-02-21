<?php
/* @var $this AntFamiliaresController */
/* @var $model AntFamiliares */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ant_fam'); ?>
		<?php echo $form->textField($model,'id_ant_fam'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alergia'); ?>
		<?php echo $form->textField($model,'alergia'); ?>
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
		<?php echo $form->label($model,'cancer'); ?>
		<?php echo $form->textField($model,'cancer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cardiovasculares'); ?>
		<?php echo $form->textField($model,'cardiovasculares'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diabetes'); ?>
		<?php echo $form->textField($model,'diabetes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enfermedades_digestivas'); ?>
		<?php echo $form->textField($model,'enfermedades_digestivas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enfermedades_renales'); ?>
		<?php echo $form->textField($model,'enfermedades_renales'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intoxicacion'); ?>
		<?php echo $form->textField($model,'intoxicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'neuromentales'); ?>
		<?php echo $form->textField($model,'neuromentales'); ?>
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