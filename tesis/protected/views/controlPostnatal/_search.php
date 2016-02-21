<?php
/* @var $this ControlPostnatalController */
/* @var $model ControlPostnatal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_cont_post'); ?>
		<?php echo $form->textField($model,'id_cont_post'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_emb'); ?>
		<?php echo $form->textField($model,'id_emb'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peso'); ?>
		<?php echo $form->textField($model,'peso',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tension'); ?>
		<?php echo $form->textField($model,'tension',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'involucion'); ?>
		<?php echo $form->textField($model,'involucion',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'herida_qui'); ?>
		<?php echo $form->textField($model,'herida_qui',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'epiciotomia'); ?>
		<?php echo $form->textField($model,'epiciotomia',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sangrado_gen'); ?>
		<?php echo $form->textField($model,'sangrado_gen',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'edema_mien_inf'); ?>
		<?php echo $form->textField($model,'edema_mien_inf',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anticoceptivo'); ?>
		<?php echo $form->textField($model,'anticoceptivo',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones_con'); ?>
		<?php echo $form->textField($model,'observaciones_con',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->