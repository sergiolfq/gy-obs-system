<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persona-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
	       <div class="span-8">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>20,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
		</div>

		<div class="span-8">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>20,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	        </div>

	    <div class="span-8">	
		<?php echo $form->labelEx($model,'correo'); ?>
		<?php echo $form->textField($model,'correo',array('size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'correo'); ?>
        </div>


	<div class="span-8">
		<?php //echo $form->labelEx($model,'fecha_nac'); ?>
		<?php //echo $form->textField($model,'fecha_nac'); ?>
		<?php //echo $form->error($model,'fecha_nac'); ?>
	</div>

<div class="span-8">
	<?php echo $form->labelEx($model,'fecha_nac'); ?>
	<?php
	if ($model->fecha_nac!='') 
	{
	$model->fecha_nac=date('Y-m-d',strtotime($model->fecha_nac));
	}
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	'model'=>$model,
	'attribute'=>'fecha_nac',
	'value'=>$model->fecha_nac,
	'language' => 'es',
	'htmlOptions' => array('readonly'=>"readonly"),
	'options'=>array(
	'autoSize'=>true,
	'defaultDate'=>$model->fecha_nac,
	'dateFormat'=>'yy-m-d',
	'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
	'buttonImageOnly'=>true,
	'buttonText'=>'ano - mes - dia',
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
	<?php echo $form->error($model,'fecha_nac'); ?>
	</div>
            
	 
	   <div class="span-8">
		<?php echo $form->labelEx($model,'Estado Civil'); ?>
		<?php echo $form->dropDownList($model,'id_es',CHtml::listData(Estadocivil::model()->findAll(), 'id_es', 'descripcion_es')); ?>
		<?php //echo $form->textField($model,'id_es'); ?>
      		<?php echo $form->error($model,'id_es'); ?>
		</div>

	    <div class="span-8">
		<?php echo $form->labelEx($model,'Grupo sangineo'); ?>
		<?php echo $form->dropDownList($model,'id_gru',CHtml::listData(Gruposangineo::model()->findAll(), 'id_gru', 'descripcion_gru')); ?>
		<?php // echo $form->textField($model,'id_gru'); ?>
		<?php echo $form->error($model,'id_gru'); ?>
	     </div>
  
	   <div class="span-8">
		<?php echo $form->labelEx($model,'cedula'); ?>
		<?php echo $form->textField($model,'cedula',array('size'=>10,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cedula'); ?>
	   </div>

 	   <div class="span-8">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
		<?php echo $form->error($model,'telefono'); ?>
	   </div>

 	   <div class="span-8">	
		<?php echo $form->labelEx($model,'tlf_eme'); ?>
		<?php echo $form->textField($model,'tlf_eme'); ?>
		<?php echo $form->error($model,'tlf_eme'); ?>
	   </div>

 	 	<div class="span-8 last">
		<?php echo $form->labelEx($model,'domicilio'); ?>
		<?php echo $form->textField($model,'domicilio',array('size'=>45,'maxlength'=>145)); ?>
		<?php echo $form->error($model,'domicilio'); ?>
	</div>
	 
	 
   	</div>
	<br/>
       <table>
        <tr>
	<div class="span-8 buttons ">
		<?php  echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>
	</tr>
         </table> <?php if($model->id_p){ ?>
          <div class=" row">
                 <label><h3>Antecedentes</h3></label>
                 <?php echo CHtml::link("Antecedentes Personales ",array("antPersonales/update/",'id'=>$model->getAnt()->id_ant_per));?>
		</div>
	  <div class="8 row">
                 <?php echo CHtml::link("Antecedentes Familiares ",array("antFamiliares/update/",'id'=>$model->getAnt()->id_ant_fam));?>
		</div>
	  <div class=" row">
                 <?php echo CHtml::link("Habitos Psicobiologicos ",array("habPsicobio/update/",'id'=>$model->getAnt()->id_hab));?>
		</div>
                <?php  } ?>
<?php $this->endWidget(); ?>

</div><!-- form -->
