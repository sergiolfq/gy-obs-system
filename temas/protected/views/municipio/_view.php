<?php
/* @var $this MunicipioController */
/* @var $data Municipio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_m')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_m), array('view', 'id'=>$data->id_m)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_m')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_m); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_pob')); ?>:</b>
	<?php echo CHtml::encode($data->num_pob); ?>
	<br />


</div>