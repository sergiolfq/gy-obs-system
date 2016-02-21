<?php
/* @var $this ExamenFisicoController */
/* @var $a ExamenFisico */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'examen-fisico-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div>
	<p class="note"> <?php echo utf8_encode('Marque lo encontrado anormal y anote sus observaciones, lo encontrado normal o no examinado déjelo desmarcado ');?></p>
</div>
	<?php echo $form->errorSummary($a,$b,$c,$d,$e,$f); ?>

       <h3>  <label class="row span-9">Genitales Externos</label> </h3><br/> <br/>
    <div class="row">
         <div class="span-4">
		<?php echo $form->labelEx($b,'labios'); ?>
		<?php echo $form->checkBox($b,'labios'); ?>
		<?php echo $form->error($b,'labios'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($b,'g_bartholine'); ?>
		<?php echo $form->checkBox($b,'g_bartholine'); ?>
		<?php echo $form->error($b,'g_bartholine'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($b,'g_skane'); ?>
		<?php echo $form->checkBox($b,'g_skane'); ?>
		<?php echo $form->error($b,'g_skane'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($b,'meato_uretral'); ?>
		<?php echo $form->checkBox($b,'meato_uretral'); ?>
		<?php echo $form->error($b,'meato_uretral'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($b,'himen'); ?>
		<?php echo $form->checkBox($b,'himen'); ?>
		<?php echo $form->error($b,'himen'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($b,'perine'); ?>
		<?php echo $form->checkBox($b,'perine'); ?>
		<?php echo $form->error($b,'perine'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($b,'vagina'); ?>
		<?php echo $form->checkBox($b,'vagina'); ?>
		<?php echo $form->error($b,'vagina'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($b,'inspeccion_esfuerzo'); ?>
		<?php echo $form->checkBox($b,'inspeccion_esfuerzo'); ?>
		<?php echo $form->error($b,'inspeccion_esfuerzo'); ?>
	</div>

	<div class="span-20">
		<?php echo $form->labelEx($b,'otros'); ?>
		<?php echo $form->checkBox($b,'otros'); ?>
		<?php echo $form->error($b,'otros'); ?>
	</div>

	<div class="span-9">
		<?php echo $form->labelEx($b,'observaciones'); ?>
		<?php echo $form->textArea($b,'observaciones',array('cols'=>80,'rows'=>3)); ?>
		<?php echo $form->error($b,'observaciones'); ?>
	</div>
    </div>
   <div class="row">
	<h3><label class="row span-20">Cuello uterino</label> </h3><br/> <br/>
     </div>
        <div class="row">
	<div class="span-4">
		<?php echo $form->labelEx($c,'orificio'); ?>
		<?php echo $form->checkBox($c,'orificio'); ?>
		<?php echo $form->error($c,'orificio'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($c,'flujos'); ?>
		<?php echo $form->checkBox($c,'flujos'); ?>
		<?php echo $form->error($c,'flujos'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($c,'cervical'); ?>
		<?php echo $form->checkBox($c,'cervical'); ?>
		<?php echo $form->error($c,'cervical'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($c,'sangre'); ?>
		<?php echo $form->checkBox($c,'sangre'); ?>
		<?php echo $form->error($c,'sangre'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($c,'cervicitis'); ?>
		<?php echo $form->checkBox($c,'cervicitis'); ?>
		<?php echo $form->error($c,'cervicitis'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($c,'leuroplasia'); ?>
		<?php echo $form->checkBox($c,'leuroplasia'); ?>
		<?php echo $form->error($c,'leuroplasia'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($c,'polipos'); ?>
		<?php echo $form->checkBox($c,'polipos'); ?>
		<?php echo $form->error($c,'polipos'); ?>
	</div>

	<div class="span-20">
		<?php echo $form->labelEx($c,'otros'); ?>
		<?php echo $form->checkBox($c,'otros'); ?>
		<?php echo $form->error($c,'otros'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($c,'observaciones'); ?>
		<?php echo $form->textArea($c,'observaciones',array('cols'=>80,'rows'=>3)); ?>
		<?php echo $form->error($c,'observaciones'); ?>
	</div>
     </div>   
<div class="row">
        <h3><label class="row span-20">Matriz</label></h3> <br/><br/>
   
<div class="span-4">
		<?php echo $form->labelEx($d,'caracteres'); ?>
		<?php echo $form->checkBox($d,'caracteres'); ?>
		<?php echo $form->error($d,'caracteres'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($d,'posicion'); ?>
		<?php echo $form->checkBox($d,'posicion'); ?>
		<?php echo $form->error($d,'posicion'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($d,'tamano'); ?>
		<?php echo $form->checkBox($d,'tamano'); ?>
		<?php echo $form->error($d,'tamano'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($d,'tumoraciones'); ?>
		<?php echo $form->checkBox($d,'tumoraciones'); ?>
		<?php echo $form->error($d,'tumoraciones'); ?>
	</div>

	<div class="span-20">
		<?php echo $form->labelEx($d,'otros'); ?>
		<?php echo $form->checkBox($d,'otros'); ?>
		<?php echo $form->error($d,'otros'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($d,'observaciones'); ?>
		<?php echo $form->textArea($d,'observaciones',array('cols'=>80,'rows'=>3)); ?>
		<?php echo $form->error($d,'observaciones'); ?>
	</div>
    </div>
   <div class="row">
	<h3><label class="span-20 row"> Anexo</label></h3> <br/><br/>

	<div class="span-4">
		<?php echo $form->labelEx($e,'dolor'); ?>
		<?php echo $form->checkBox($e,'dolor'); ?>
		<?php echo $form->error($e,'dolor'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($e,'empastamiento'); ?>
		<?php echo $form->checkBox($e,'empastamiento'); ?>
		<?php echo $form->error($e,'empastamiento'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($e,'tamano'); ?>
		<?php echo $form->checkBox($e,'tamano'); ?>
		<?php echo $form->error($e,'tamano'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($e,'tumoraciones'); ?>
		<?php echo $form->checkBox($e,'tumoraciones'); ?>
		<?php echo $form->error($e,'tumoraciones'); ?>
	</div>

	<div class="span-20">
		<?php echo $form->labelEx($e,'otros'); ?>
		<?php echo $form->checkBox($e,'otros'); ?>
		<?php echo $form->error($e,'otros'); ?>
	</div>

	<div class="span-8">
		<?php echo $form->labelEx($e,'observaciones'); ?>
		<?php echo $form->textArea($e,'observaciones',array('cols'=>80,'rows'=>3)); ?>
		<?php echo $form->error($e,'observaciones'); ?>
	</div>
   </div>
   <div class="row">
	<h3><label class="row span-20">Parametrios</label></h3> <br/><br/>
<div class="span-4">
		<?php echo $form->labelEx($f,'induracion'); ?>
		<?php echo $form->checkBox($f,'induracion'); ?>
		<?php echo $form->error($f,'induracion'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($f,'tumores'); ?>
		<?php echo $form->checkBox($f,'tumores'); ?>
		<?php echo $form->error($f,'tumores'); ?>
	</div>

	<div class="span-4">
		<?php echo $form->labelEx($f,'otros'); ?>
		<?php echo $form->checkBox($f,'otros'); ?>
		<?php echo $form->error($f,'otros'); ?>
	</div>

	<div class="span-8">
		<?php echo $form->labelEx($f,'observaciones'); ?>
		<?php echo $form->textArea($f,'observaciones',array('cols'=>80,'rows'=>3)); ?>
		<?php echo $form->error($f,'observaciones'); ?>
	</div>
</div>

	<div class=" row span-20 buttons">
		<?php echo CHtml::submitButton($a->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
