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

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_m')); ?>:</b>
	<?php echo CHtml::encode($data->id_m); ?>
	<br />


</div>