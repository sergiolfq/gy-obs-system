<?php
/* @var $this EmbarazoController */
/* @var $model Embarazo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'embarazo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
<div class="row">
	<div class="span-2">
		<?php echo $form->labelEx($model,'peso_anterior'); ?>
		<?php echo $form->textField($model,'peso_anterior',array('size'=>6,'maxlength'=>45,'readonly'=>true)); ?>
		<?php echo $form->error($model,'peso_anterior'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'talla'); ?>
		<?php echo $form->textField($model,'talla',array('size'=>3,'maxlength'=>45,'readonly'=>true)); ?>
		<?php echo $form->error($model,'talla'); ?>
	</div>

<div class="span-4">
	<?php echo $form->labelEx($model,'fum',array('title'=>'Fecha de Última Menstruación')); ?>
	<?php
	if ($model->fum!='') 
	{
	$model->fum=date('Y-m-d',strtotime($model->fum));
	}
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	'model'=>$model,
	'attribute'=>'fum',
	'value'=>$model->fum,
	'language' => 'es',
	'htmlOptions' => array('readonly'=>"readonly"),
	'options'=>array(
	'autoSize'=>true,
	'defaultDate'=>$model->fum,
	'dateFormat'=>'yy-m-d',
	'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
	'buttonImageOnly'=>true,
	'buttonText'=>'fum',
	'selectOtherMonths'=>true,
	'showAnim'=>'slide',
	'showButtonPanel'=>true,
	'showOn'=>'none',
	'yearRange'=>'1930:2024',
	'showOtherMonths'=>true,
	'changeMonth' => 'true',
	'changeYear' => 'true',
	'minDate'=>'1930-01-01', //fecha minima
	'maxDate'=> 'date("Y-m-d")',
	//fecha maxima
	),
	)); ?>
	<?php echo $form->error($model,'fum'); ?>
	</div>



	<div class="span-4">
	<?php echo $form->labelEx($model,'fecha_inicial'); ?>
	<?php
	if ($model->fecha_inicial!='') 
	{
	$model->fecha_inicial=date('Y-m-d',strtotime($model->fecha_inicial));
	}
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	'model'=>$model,
	'attribute'=>'fecha_inicial',
	'value'=>$model->fecha_inicial,
	'language' => 'es',
	'htmlOptions'=>array('readonly'=>"readonly"),
	'options'=>array(
	'autoSize'=>true,
	'defaultDate'=>$model->fecha_inicial,
	'dateFormat'=>'yy-m-d',
	'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
	'buttonImageOnly'=>true,
	'buttonText'=>'fecha inicial',
	'selectOtherMonths'=>true,
	'showAnim'=>'slide',
	'showButtonPanel'=>true,
	'showOn'=>'none',
	'yearRange'=>'1930:2024',
	'showOtherMonths'=>true,
	'changeMonth' => 'true',
	'changeYear' => 'true',
	'minDate'=>'1930-01-01', //fecha minima
	'maxDate'=> 'date("Y-m-d")',
	//fecha maxima
	),
	)); ?>
	<?php echo $form->error($model,'fecha_inicial'); ?>
	</div>

<div class="span-4">
	<?php echo $form->labelEx($model,'fpp',array('title'=>'Fecha Probable de Parto')); ?>
	<?php
	if ($model->fpp!='') 
	{
	$model->fpp=date('Y-m-d',strtotime($model->fpp));
	}
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	'model'=>$model,
	'attribute'=>'fpp',
	'value'=>$model->fpp,
	'language' => 'es',
	'htmlOptions' => array('readonly'=>"readonly"),
	'options'=>array(
	'autoSize'=>true,
	'defaultDate'=>$model->fpp,
	'dateFormat'=>'yy-m-d',
	'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
	'buttonImageOnly'=>true,
	'buttonText'=>'fpp',
	'selectOtherMonths'=>true,
	'showAnim'=>'slide',
	'showButtonPanel'=>true,
	'showOn'=>'none',
	'yearRange'=>'1930:2024',
	'showOtherMonths'=>true,
	'changeMonth' => 'true',
	'changeYear' => 'true',
	'minDate'=>'1930-01-01', //fecha minima
	'maxDate'=> '+1Y',
	//fecha maxima
	),
	)); ?>
	<?php echo $form->error($model,'fpp'); ?>
	</div>

	<div class="span-20">
         <h4>Resultados de exámenes </h4>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'vdrl'); ?>
		<?php echo $form->dropDownList($model,'vdrl',$model->opcionesPositivo(),array('diabled'=>'disabled')); ?>
		<?php echo $form->error($model,'vdrl'); ?>
	</div>

	<div class="span-4">
	<?php echo $form->labelEx($model,'fecha_vdrl'); ?>
	<?php
	if ($model->fecha_vdrl!='') 
	{
	$model->fecha_vdrl=date('Y-m-d',strtotime($model->fecha_vdrl));
	}
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	'model'=>$model,
	'attribute'=>'fecha_vdrl',
	'value'=>$model->fecha_vdrl,
	'language' => 'es',
	'htmlOptions' => array('readonly'=>"readonly"),
	'options'=>array(
	'autoSize'=>true,
	'defaultDate'=>$model->fecha_vdrl,
	'dateFormat'=>'yy-m-d',
	'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
	'buttonImageOnly'=>true,
	'buttonText'=>'fecha vdrl',
	'selectOtherMonths'=>true,
	'showAnim'=>'slide',
	'showButtonPanel'=>true,
	'showOn'=>'none',
	'yearRange'=>'1930:2024',
	'showOtherMonths'=>true,
	'changeMonth' => 'true',
	'changeYear' => 'true',
	'minDate'=>'1930-01-01', //fecha minima
	'maxDate'=> 'date("Y-m-d")',
	//fecha maxima
	),
	)); ?>
	<?php echo $form->error($model,'fecha_vdrl'); ?>
	</div>

	<div class="span-3">
		<?php echo $form->labelEx($model,'hb'); ?>
		<?php echo $form->dropDownList($model,'hb',$model->opcionesNormal()); ?>
		<?php echo $form->error($model,'hb'); ?>
	</div>

	<div class="span-7">
	<?php echo $form->labelEx($model,'fecha_hb'); ?>
	<?php
	if ($model->fecha_hb!='') 
	{
	$model->fecha_hb=date('Y-m-d',strtotime($model->fecha_hb));
	}
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	'model'=>$model,
	'attribute'=>'fecha_hb',
	'value'=>$model->fecha_hb,
	'language' => 'es',
	'options'=>array(
	'autoSize'=>true,
	'defaultDate'=>$model->fecha_hb,
	'dateFormat'=>'yy-m-d',
	'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
	'buttonImageOnly'=>true,
	'buttonText'=>'fecha hb',
	'selectOtherMonths'=>true,
	'showAnim'=>'slide',
	'showButtonPanel'=>true,
	'showOn'=>'none',
	'yearRange'=>'1930:2024',
	'showOtherMonths'=>true,
	'changeMonth' => 'true',
	'changeYear' => 'true',
	'minDate'=>'1930-01-01', //fecha minima
	'maxDate'=> 'date("Y-m-d")',
	//fecha maxima
	),
	)); ?>
	<?php echo $form->error($model,'fecha_hb'); ?>
	</div>



	<div class="span-2">
		<?php echo $form->labelEx($model,'exam_cli_hom'); ?>
		<?php echo $form->dropDownList($model,'exam_cli_hom',$model->opcionesNormal(),array('disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'exam_cli_hom'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'examen_mama'); ?>
		<?php echo $form->dropDownList($model,'examen_mama',$model->opcionesNormal(),array('disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'examen_mama'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'examen_odo',array('title'=>'Odontológico')); ?>
		<?php echo $form->dropDownList($model,'examen_odo',$model->opcionesNormal(),array('disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'examen_odo'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'pelvis'); ?>
		<?php echo $form->dropDownList($model,'pelvis',$model->opcionesNormal(),array('disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'pelvis'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'papanicolau'); ?>
		<?php echo $form->dropDownList($model,'papanicolau',$model->opcionesNormal(),array('disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'papanicolau'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'colposcopia'); ?>
		<?php echo $form->dropDownList($model,'colposcopia',$model->opcionesNormal(),array('disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'colposcopia'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($model,'examen_clini_cervix'); ?>
		<?php echo $form->dropDownList($model,'examen_clini_cervix',$model->opcionesNormal(),array('disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'examen_clini_cervix'); ?>
	</div>

	<div class="span-8">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>1,'cols'=>90,'readonly'=>true)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>



</div>
<hr>
<div class="span-20">
         <h4>Finalización de embarazo </h4>
	</div>
<div class="row">
	<div class="span-3">
		<?php echo $form->labelEx($model,'tipo_parto'); ?>
		<?php echo $form->dropDownList($model,'tipo_parto',$model->opcionesParto(),array('disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'tipo_parto'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'hora'); ?>
		<?php echo $form->textField($model,'hora',array('size'=>4,'maxlength'=>45,'readonly'=>true)); ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>

	<div class="span-3">
	<?php echo $form->labelEx($model,'fecha_final'); ?>
	<?php
	if ($model->fecha_final!='') 
	{
	$model->fecha_final=date('Y-m-d',strtotime($model->fecha_final));
	}
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	'model'=>$model,
	'attribute'=>'fecha_final',
	'value'=>$model->fecha_final,
	'language' => 'es',
	'htmlOptions' => array('readonly'=>"readonly"),
	'options'=>array(
	'autoSize'=>true,
	'defaultDate'=>$model->fecha_final,
	'dateFormat'=>'yy-m-d',
	'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
	'buttonImageOnly'=>true,
	'buttonText'=>'fecha final',
	'selectOtherMonths'=>true,
	'showAnim'=>'slide',
	'showButtonPanel'=>true,
	'showOn'=>'none',
	'yearRange'=>'1930:2024',
	'showOtherMonths'=>true,
	'changeMonth' => 'true',
	'changeYear' => 'true',
	'minDate'=>'1930-01-01', //fecha minima
	'maxDate'=> 'date("Y-m-d")',
	//fecha maxima
	),
	)); ?>
	<?php echo $form->error($model,'fecha_final'); ?>
	</div>
	<div class="span-2">
		<?php echo $form->labelEx($model,'muerte_fetal'); ?>
		<?php echo $form->dropDownList($model,'muerte_fetal',$model->opciones(),array('disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'muerte_fetal'); ?>
	</div>

	<div class="span-1">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->dropDownList($model,'sexo',$model->opcionesSexo(),array('disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'peso'); ?>
		<?php echo $form->textField($model,'peso',array('size'=>4,'maxlength'=>45,'readonly'=>true)); ?>
		<?php echo $form->error($model,'peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'talla_final'); ?>
		<?php echo $form->textField($model,'talla_final',array('size'=>3,'maxlength'=>45,'readonly'=>true)); ?>
		<?php echo $form->error($model,'talla_final'); ?>
	</div>
	
	<div class="span-3">
		<?php echo $form->labelEx($model,'vdrl_em'); ?>
		<?php echo $form->dropDownList($model,'vdrl_em',$model->opcionesPositivo(),array('disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'vdrl_em'); ?>
	</div>



	
<br/>
	<div class="span-2">
	
		
	</div>


</div>
	<div class="row span-20 buttons">
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
