<?php
/* @var $this ControlPrenatalController */
/* @var $model ControlPrenatal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_con_pre'); ?>
		<?php echo $form->textField($model,'id_con_pre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fur'); ?>
		<?php echo $form->textField($model,'fur'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eco'); ?>
		<?php echo $form->textField($model,'eco',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ta'); ?>
		<?php echo $form->textField($model,'ta',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p'); ?>
		<?php echo $form->textField($model,'p',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'au'); ?>
		<?php echo $form->textField($model,'au',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foco'); ?>
		<?php echo $form->textField($model,'foco',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'presentacion'); ?>
		<?php echo $form->textField($model,'presentacion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ecograma'); ?>
		<?php echo $form->textField($model,'ecograma',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'semana'); ?>
		<?php echo $form->textField($model,'semana',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'embarazo_id_emb'); ?>
		<?php echo $form->textField($model,'embarazo_id_emb'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
