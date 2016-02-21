<?php
/* @var $this ReporteController */

$this->breadcrumbs=array(
	'Reporte',
);
?>


        <div class=" row">
                 <label><h3>Reportes generales de los pacientes</h3></label>
	  <div class="8 row">
                 <?php echo CHtml::link("Reporte de antecedentes familiares ",array("reporte/reporteFamiliares"));?>
	  </div><br/>
	  <div class="8 row">
                 <?php echo CHtml::link("Reporte de hábitos psicobiológicos ",array("reporte/reporteHabitos"));?>
	 </div><br/>
	  <div class="8 row">
                 <?php echo CHtml::link("Reporte de antecedentes personales ",array("reporte/reportePersonal"));?>
	 </div>

	</div>

	<div class=" row">                  <hr> 
</div>

                 
  	<div class=" row">
                 <label><h3>Reportes por año  </h3></label>
  	  <div class="8 row">
                 <?php echo CHtml::link("Reporte de consultas  ",array("reporte/consultaForm"),array('style'=>'margin-bottom:2cm') );?> 
	  </div><br/>
	  <div class="8 row">
                 <?php echo CHtml::link("Reporte de control prenatal ",array("reporte/reporteControlPrenatalForm"));?>
	  </div><br/>
	  <div class="8 row">
                 <?php echo CHtml::link("Reporte de examenes fisicos ginecológicos ",array("reporte/reporteExamForm"));?>
	 </div><br/>
	  <div class="8 row">
                 <?php echo CHtml::link("Reporte de control postnatal ",array("reporte/reportePostnatalForm"));?>
	 </div>

	</div>



<?php    //$this->renderPartial('_form'); ?>
