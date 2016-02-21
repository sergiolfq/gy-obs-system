<?php
/* @var $this HistoriaController */
/* @var $model Historia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_his'); ?>
		<?php echo $form->textField($model,'id_his'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_p'); ?>
		<?php echo $form->textField($model,'id_p'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_ant'); ?>
		<?php echo $form->textField($model,'id_ant'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->