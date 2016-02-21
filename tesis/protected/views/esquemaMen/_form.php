<?php
/* @var $this EsquemaMenController */
/* @var a EsquemaMen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'esquema-men-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"> Cada divisi&oacuten representa seis dias. </p>

	<?php echo $form->errorSummary($a_1,$a_2,$a_3,$a_4); ?>

<div class="row">

	<div class="span-5">
		<?php echo $form->labelEx($a_1,'[1]mes_esq'); ?>
		<?php echo $form->textField($a_1,'[1]mes_esq',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($a_1,'[1]mes_esq'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_1,'[1]div1'); ?>
		<?php echo $form->dropDownList($a_1,'[1]div1',$a_1->opciones()); ?>
		<?php echo $form->error($a_1,'[1]div1'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_1,'[1]div2'); ?>
		<?php echo $form->dropDownList($a_1,'[1]div2',$a_1->opciones()); ?>
		<?php echo $form->error($a_1,'[1]div2'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_1,'[1]div3'); ?>
		<?php echo $form->dropDownList($a_1,'[1]div3',$a_1->opciones()); ?>
		<?php echo $form->error($a_1,'[1]div3'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_1,'[1]div4'); ?>
		<?php echo $form->dropDownList($a_1,'[1]div4',$a_1->opciones()); ?>
		<?php echo $form->error($a_1,'[1]div4'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_1,'[1]div5'); ?>
		<?php echo $form->dropDownList($a_1,'[1]div5',$a_1->opciones()); ?>
		<?php echo $form->error($a_1,'[1]div5'); ?>
	</div>



	<div class="span-20">
	<?php echo $form->labelEx($a_1,'[1]fecha_esq'); ?>
	<?php
	if ($a_1->fecha_esq!='') 
	{
	$a_1->fecha_esq=date('Y-m-d',strtotime($a_1->fecha_esq));
	}
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	'model'=>$a_1,
	'attribute'=>'[1]fecha_esq',
	'value'=>$a_1->fecha_esq,
	'language' => 'es',
	'htmlOptions' => array('readonly'=>"readonly"),
	'options'=>array(
	'autoSize'=>true,
	'defaultDate'=>$a_1->fecha_esq,
	'dateFormat'=>'yy-m-d',
	'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
	'buttonImageOnly'=>true,
	'buttonText'=>'Fecha_nac',
	'selectOtherMonths'=>true,
	'showAnim'=>'slide',
	'showButtonPanel'=>true,
	'showOn'=>'button',
	'yearRange'=>'1930:2024',
	'showOtherMonths'=>true,
	'changeMonth' => 'true',
	'changeYear' => 'true',
	'minDate'=>'1930-01-01', //fecha minima
	'maxDate'=> 'date("Y-m-d")',
	//fecha maxima
	),
	)); ?>
	<?php echo $form->error($a_1,'[1]fecha_esq'); ?>
	</div>

	<div class="span-10">
		<?php echo $form->labelEx($a_1,'[1]obs_esq'); ?>
		<?php echo $form->textArea($a_1,'[1]obs_esq',array('rows'=>1, 'cols'=>50)); ?>
		<?php echo $form->error($a_1,'[1]obs_esq'); ?>
	</div>



</div>
<hr>
<div class="row">

	<div class="span-5">
		<?php echo $form->labelEx($a_2,'[2]mes_esq'); ?>
		<?php echo $form->textField($a_2,'[2]mes_esq',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($a_2,'[]mes_esq'); ?>
	</div>

        <div class="span-2">
		<?php echo $form->labelEx($a_2,'[2]div1'); ?>
		<?php echo $form->dropDownList($a_2,'[2]div1',$a_2->opciones()); ?>
		<?php echo $form->error($a_2,'[2]div1'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_2,'[2]div2'); ?>
		<?php echo $form->dropDownList($a_2,'[2]div2',$a_2->opciones()); ?>
		<?php echo $form->error($a_2,'[2]div2'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_2,'[2]div3'); ?>
		<?php echo $form->dropDownList($a_2,'[2]div3',$a_2->opciones()); ?>
		<?php echo $form->error($a_2,'[2]div3'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_2,'[2]div4'); ?>
		<?php echo $form->dropDownList($a_2,'[2]div4',$a_2->opciones()); ?>
		<?php echo $form->error($a_2,'[2]div4'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_2,'[2]div5'); ?>
		<?php echo $form->dropDownList($a_2,'[2]div5',$a_2->opciones()); ?>
		<?php echo $form->error($a_2,'[2]div5'); ?>
	</div>



	<div class="span-20">
	<?php echo $form->labelEx($a_1,'[2]fecha_esq'); ?>
	<?php
	if ($a_2->fecha_esq!='') 
	{
	$a_2->fecha_esq=date('Y-m-d',strtotime($a_2->fecha_esq));
	}
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	'model'=>$a_2,
	'attribute'=>'[2]fecha_esq',
	'value'=>$a_2->fecha_esq,
	'language' => 'es',
	'htmlOptions' => array('readonly'=>"readonly"),
	'options'=>array(
	'autoSize'=>true,
	'defaultDate'=>$a_2->fecha_esq,
	'dateFormat'=>'yy-m-d',
	'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
	'buttonImageOnly'=>true,
	'buttonText'=>'Fecha_nac',
	'selectOtherMonths'=>true,
	'showAnim'=>'slide',
	'showButtonPanel'=>true,
	'showOn'=>'button',
	'yearRange'=>'1930:2024',
	'showOtherMonths'=>true,
	'changeMonth' => 'true',
	'changeYear' => 'true',
	'minDate'=>'1930-01-01', //fecha minima
	'maxDate'=> 'date("Y-m-d")',
	//fecha maxima
	),
	)); ?>
	<?php echo $form->error($a_2,'[2]fecha_esq'); ?>
	</div>

	<div class="span-10">
		<?php echo $form->labelEx($a_2,'[2]obs_esq'); ?>
		<?php echo $form->textArea($a_2,'[2]obs_esq',array('rows'=>1, 'cols'=>50)); ?>
		<?php echo $form->error($a_2,'[2]obs_esq'); ?>
	</div>



</div>
<hr>
<div class="row">

	<div class="span-5">
		<?php echo $form->labelEx($a_3,'[3]mes_esq'); ?>
		<?php echo $form->textField($a_3,'[3]mes_esq',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($a_3,'[3]mes_esq'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_3,'[3]div1'); ?>
		<?php echo $form->dropDownList($a_3,'[3]div1',$a_3->opciones()); ?>
		<?php echo $form->error($a_3,'[3]div1'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_3,'[3]div2'); ?>
		<?php echo $form->dropDownList($a_3,'[3]div2',$a_3->opciones()); ?>
		<?php echo $form->error($a_3,'[3]div2'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_3,'[3]div3'); ?>
		<?php echo $form->dropDownList($a_3,'[3]div3',$a_3->opciones()); ?>
		<?php echo $form->error($a_3,'[3]div3'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_3,'[3]div4'); ?>
		<?php echo $form->dropDownList($a_3,'[3]div4',$a_3->opciones()); ?>
		<?php echo $form->error($a_3,'[3]div4'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_3,'[3]div5'); ?>
		<?php echo $form->dropDownList($a_3,'[3]div5',$a_3->opciones()); ?>
		<?php echo $form->error($a_3,'[3]div5'); ?>
	</div>



<div class="span-20">
	<?php echo $form->labelEx($a_3,'[3]fecha_esq'); ?>
	<?php
	if ($a_3->fecha_esq!='') 
	{
	$a_3->fecha_esq=date('Y-m-d',strtotime($a_3->fecha_esq));
	}
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	'model'=>$a_3,
	'attribute'=>'[3]fecha_esq',
	'value'=>$a_3->fecha_esq,
	'language' => 'es',
	'htmlOptions' => array('readonly'=>"readonly"),
	'options'=>array(
	'autoSize'=>true,
	'defaultDate'=>$a_3->fecha_esq,
	'dateFormat'=>'yy-m-d',
	'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
	'buttonImageOnly'=>true,
	'buttonText'=>'Fecha_nac',
	'selectOtherMonths'=>true,
	'showAnim'=>'slide',
	'showButtonPanel'=>true,
	'showOn'=>'button',
	'yearRange'=>'1930:2024',
	'showOtherMonths'=>true,
	'changeMonth' => 'true',
	'changeYear' => 'true',
	'minDate'=>'1930-01-01', //fecha minima
	'maxDate'=> 'date("Y-m-d")',
	//fecha maxima
	),
	)); ?>
	<?php echo $form->error($a_3,'[3]fecha_esq'); ?>
	</div>

	<div class="span-10">
		<?php echo $form->labelEx($a_3,'[3]obs_esq'); ?>
		<?php echo $form->textArea($a_3,'[3]obs_esq',array('rows'=>1, 'cols'=>50)); ?>
		<?php echo $form->error($a_3,'[3]obs_esq'); ?>
	</div>


</div>
<hr>
<div class="row">

	<div class="span-5">
		<?php echo $form->labelEx($a_4,'[4]mes_esq'); ?>
		<?php echo $form->textField($a_4,'[4]mes_esq',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($a_4,'[4]mes_esq'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_4,'[4]div1'); ?>
		<?php echo $form->dropDownList($a_4,'[4]div1',$a_4->opciones()); ?>
		<?php echo $form->error($a_4,'[4]div1'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_4,'[4]div2'); ?>
		<?php echo $form->dropDownList($a_4,'[4]div2',$a_4->opciones()); ?>
		<?php echo $form->error($a_4,'[4]div2'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_4,'[4]div3'); ?>
		<?php echo $form->dropDownList($a_4,'[4]div3',$a_4->opciones()); ?>
		<?php echo $form->error($a_4,'[4]div3'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_4,'[4]div4'); ?>
		<?php echo $form->dropDownList($a_4,'[4]div4',$a_4->opciones()); ?>
		<?php echo $form->error($a_4,'[4]div4'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($a_4,'[4]div5'); ?>
		<?php echo $form->dropDownList($a_4,'[4]div5',$a_4->opciones()); ?>
		<?php echo $form->error($a_4,'[4]div5'); ?>
	</div>



<div class="span-20">
	<?php echo $form->labelEx($a_4,'[4]fecha_esq'); ?>
	<?php
	if ($a_4->fecha_esq!='') 
	{
	$a_4->fecha_esq=date('Y-m-d',strtotime($a_4->fecha_esq));
	}
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	'model'=>$a_4,
	'attribute'=>'[4]fecha_esq',
	'value'=>$a_4->fecha_esq,
	'language' => 'es',
	'htmlOptions' => array('readonly'=>"readonly"),
	'options'=>array(
	'autoSize'=>true,
	'defaultDate'=>$a_4->fecha_esq,
	'dateFormat'=>'yy-m-d',
	'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
	'buttonImageOnly'=>true,
	'buttonText'=>'Fecha_nac',
	'selectOtherMonths'=>true,
	'showAnim'=>'slide',
	'showButtonPanel'=>true,
	'showOn'=>'button',
	'yearRange'=>'1930:2024',
	'showOtherMonths'=>true,
	'changeMonth' => 'true',
	'changeYear' => 'true',
	'minDate'=>'1930-01-01', //fecha minima
	'maxDate'=> 'date("Y-m-d")',
	//fecha maxima
	),
	)); ?>
	<?php echo $form->error($a_4,'[4]fecha_esq'); ?>
	</div>

	<div class="span-10">
		<?php echo $form->labelEx($a_4,'[4]obs_esq'); ?>
		<?php echo $form->textArea($a_4,'[4]obs_esq',array('rows'=>1, 'cols'=>50)); ?>
		<?php echo $form->error($a_4,'[4]obs_esq'); ?>
	</div>

	
</div>
<div class="row span-20">
	<div class="row buttons">
		<?php echo CHtml::submitButton($a_1->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
