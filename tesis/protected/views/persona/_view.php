<?php
/* @var $this PersonaController */
/* @var $data Persona */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_p')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_p), array('view', 'id'=>$data->id_p)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('domicilio')); ?>:</b>
	<?php echo CHtml::encode($data->domicilio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nac')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nac); ?>
	<br />

	<b><?php //echo CHtml::encode($data->getAttributeLabel('id_es')); ?></b>
	<?php //echo CHtml::encode($data->id_es); ?>


	<b><?php echo CHtml::encode($data->getAttributeLabel('id_es')); ?>:</b>
	<?php echo CHtml::encode($data->idEs->descripcion_es); ?>
	<br />         

	<b><?php //echo CHtml::encode($data->getAttributeLabel('id_gru')); ?></b>
	<?php //echo CHtml::encode($data->id_gru); ?>
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_gru')); ?>:</b>
	<?php echo CHtml::encode($data->idGru->descripcion_gru); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
	<?php echo CHtml::encode($data->cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tlf_eme')); ?>:</b>
	<?php echo CHtml::encode($data->tlf_eme); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo')); ?>:</b>
	<?php echo CHtml::encode($data->correo); ?>
	<br />

	

</div>
