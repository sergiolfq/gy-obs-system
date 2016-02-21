<?php
/* @var $this HistoriaController */
/* @var $b Historia */
/* @var $form CActiveForm */
?>


<div class="form menuprincipal">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'historia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($a,$b); ?>

	<div class="row">
	       <div class="span-5">
		<?php echo $form->labelEx($b,'nombre'); ?>
		<?php echo $form->textField($b,'nombre',array('size'=>20,'maxlength'=>45)); ?>
		<?php echo $form->error($b,'nombre'); ?>
		</div>

		<div class="span-5">
		<?php echo $form->labelEx($b,'apellido'); ?>
		<?php echo $form->textField($b,'apellido',array('size'=>20,'maxlength'=>45)); ?>
		<?php echo $form->error($b,'apellido'); ?>
	        </div>

	<div class="span-4">
	<?php echo $form->labelEx($b,'fecha_nac'); ?>
	<?php
	if ($b->fecha_nac!='') 
	{
	$b->fecha_nac=date('Y-m-d',strtotime($b->fecha_nac));
	}
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	'model'=>$b,
	'attribute'=>'fecha_nac',
	'value'=>$b->fecha_nac,
	'language' => 'es',
	'htmlOptions' => array('readonly'=>"readonly"),
	'options'=>array(
	'autoSize'=>true,
	'defaultDate'=>$b->fecha_nac,
	'dateFormat'=>'yy-m-d',
	'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
	'buttonImageOnly'=>true,
	'buttonText'=>'año- mes - día',
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
	<?php echo $form->error($b,'fecha_nac'); ?>
	</div>
            
   	   <div class="span-2">
		<?php echo $form->labelEx($b,'cedula'); ?>
		<?php echo $form->textField($b,'cedula',array('size'=>10,'maxlength'=>45)); ?>
		<?php echo $form->error($b,'cedula'); ?>
	   </div>
							
		<div class="span-5">	
		<?php echo $form->labelEx($b,'correo'); ?>
		<?php echo $form->textField($b,'correo',array('size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($b,'correo'); ?>
           </div>
	 
	   <div class="span-5">
		<?php echo $form->labelEx($b,'Estado Civil'); ?>
		<?php echo $form->dropDownList($b,'id_es',CHtml::listData(Estadocivil::model()->findAll(), 'id_es', 'descripcion_es')); ?>
		<?php //echo $form->textField($b,'id_es'); ?>
      		<?php echo $form->error($b,'id_es'); ?>
		</div>

	    <div class="span-4">
		<?php echo $form->labelEx($b,'Grupo sangineo'); ?>
		<?php echo $form->dropDownList($b,'id_gru',CHtml::listData(Gruposangineo::model()->findAll(), 'id_gru', 'descripcion_gru')); ?>
		<?php // echo $form->textField($b,'id_gru'); ?>
		<?php echo $form->error($b,'id_gru'); ?>
	     </div>
  
	

 	   <div class="span-1">
		<?php echo $form->labelEx($b,'telefono'); ?>
		<?php echo $form->textField($b,'telefono',array('size'=>12)); ?>
		<?php echo $form->error($b,'telefono'); ?>
	   </div>

 	   <div class="span-5">	
		<?php echo $form->labelEx($b,'tlf_eme'); ?>
		<?php echo $form->textField($b,'tlf_eme'); ?>
		<?php echo $form->error($b,'tlf_eme'); ?>
	   </div>

	   
	   	<div class="span-10">
		<?php echo $form->labelEx($b,'domicilio'); ?>
		<?php echo $form->textField($b,'domicilio',array('size'=>28,'maxlength'=>145)); ?>
		<?php echo $form->error($b,'domicilio'); ?>
	</div>
 	   
   	</div>



	<div class="span-7  row buttons">
		<?php echo CHtml::submitButton($b->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>
<?php if($b->id_p){ ?>

<table>
<tr > <!-- titulos de las secciones --> 

<td style='text-align:center;'>
<h3>Antecedentes</h3>
</td>

<td style='text-align:center;'>
<h3>Aspectos Ginecológicos</h3>
</td>

<td style='text-align:center;'>
<h3>Aspectos Obstétricos</h3>
</td>

<td style='text-align:center;'>
<h3>Récipe de consulta y archivos</h3>
</td>

</tr>


<tr> <!-- Primera fila -->

<td>
 <?php echo CHtml::link("<img src=".Yii::app()->baseUrl."/images/personales.png title='Antecedentes Personales' alt='Antecedentes Personales' /> ",array("antPersonales/update/",'id'=>$b->getAnt()->id_ant_per));?>
</td>

<td>
  <?php echo CHtml::link("<img src=".Yii::app()->baseUrl."/images/examenFisico.png alt='Examen Fisico' title='Examen Fisico' /> ",array("examenFisico/create/"));?>
</td>

<td>
<?php echo CHtml::link("<img src=".Yii::app()->baseUrl."/images/embarazo.png alt=Embarazo title='Embarazo'/>",array($a->getEmb()));?>
</td>

<td>
 <?php echo CHtml::link("<img src=".Yii::app()->baseUrl."/images/recipeinterfaz.png alt='Recipe' title='Recipe' /> ",array("recipe/create/"));?>
</td>

</tr>

<tr> <!-- Segunda Fila -->

<td>
 <?php echo CHtml::link("<img src=".Yii::app()->baseUrl."/images/familiares.png  title='Antecedentes Familiares'  alt='Antecedentes Familiares'  /> ",array("antFamiliares/update/",'id'=>$b->getAnt()->id_ant_fam));?>
</td>


<td>
<?php echo CHtml::link("<img src=".Yii::app()->baseUrl."/images/esquema_menstrual.png alt='Esquema Menstrual' title='Esquema Menstrual'/> ",array("esquemaMen/create/"));?>
</td>

<td>
 <?php ($a->getEmbId()!=null)?$dir='controlPrenatal/create/':$dir='controlPrenatal/admin'; echo CHtml::link("<img src=".Yii::app()->baseUrl."/images/control_prenatal.png alt='Control prenatal'  title='Control prenatal'/>",array($dir));?>
</td>


<td>
  <?php echo CHtml::link("<img src=".Yii::app()->baseUrl."/images/archivointerfaz.png alt='Archivo' title='archivo'/> ",array("archivo/create/"));?>
</td>

</tr>


<tr> <!-- Tercera Fila  -->

<td>
 <?php echo CHtml::link("<img src=".Yii::app()->baseUrl."/images/habitos.png alt='Habitos Psicobiologicos' title='Habitos Psicobiologicos' /> ",array("habPsicobio/update/",'id'=>$b->getAnt()->id_hab));?>
</td>


<td>
</td>


<td>
  <?php ($a->getEmbId()!=null)?$dir='controlPostnatal/create/':$dir='controlPostnatal/admin'; echo CHtml::link("<img src=".Yii::app()->baseUrl."/images/control_postnatal.png alt='Control postnatal' title='Control postnatal'/> ",array($dir)); ?>
</td>


<td>
</td>

<tr>

<tr> <!-- Cuarta fila -->
<td>
 <?php echo CHtml::link("<img src=".Yii::app()->baseUrl."/images/antobstetricos.png alt='Antecedentes Obstetricos' title='Antecedentes Obstetricos' /> ",array("antObstetricos/create/"));?>
</td>

<td>
</td>

<td>
</td>

<td>
</td>

</tr>


</table>
         <?php } ?>






<?php $this->endWidget(); ?>

</div><!-- form -->
