<?php
/* @var $this EmbarazoController */
/* @var $model Embarazo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_emb'); ?>
		<?php echo $form->textField($model,'id_emb'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peso_anterior'); ?>
		<?php echo $form->textField($model,'peso_anterior',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'talla'); ?>
		<?php echo $form->textField($model,'talla',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fum'); ?>
		<?php echo $form->textField($model,'fum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'exam_cli_hom'); ?>
		<?php echo $form->textField($model,'exam_cli_hom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'examen_mama'); ?>
		<?php echo $form->textField($model,'examen_mama'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'examen_odo'); ?>
		<?php echo $form->textField($model,'examen_odo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pelvis'); ?>
		<?php echo $form->textField($model,'pelvis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'papanicolau'); ?>
		<?php echo $form->textField($model,'papanicolau'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'colposcopia'); ?>
		<?php echo $form->textField($model,'colposcopia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'examen_clini_cervix'); ?>
		<?php echo $form->textField($model,'examen_clini_cervix'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vdrl'); ?>
		<?php echo $form->textField($model,'vdrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_vdrl'); ?>
		<?php echo $form->textField($model,'fecha_vdrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hb'); ?>
		<?php echo $form->textField($model,'hb'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_hb'); ?>
		<?php echo $form->textField($model,'fecha_hb'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_parto'); ?>
		<?php echo $form->textField($model,'tipo_parto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora'); ?>
		<?php echo $form->textField($model,'hora',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_final'); ?>
		<?php echo $form->textField($model,'fecha_final',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'muerte_fetal'); ?>
		<?php echo $form->textField($model,'muerte_fetal',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peso'); ?>
		<?php echo $form->textField($model,'peso',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vdrl_em'); ?>
		<?php echo $form->textField($model,'vdrl_em',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'talla_final'); ?>
		<?php echo $form->textField($model,'talla_final',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_inicial'); ?>
		<?php echo $form->textField($model,'fecha_inicial',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'historia_id_his'); ?>
		<?php echo $form->textField($model,'historia_id_his'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->