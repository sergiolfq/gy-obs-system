<?php
/* @var $this AntObstetricosController */
/* @var $data AntObstetricos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ant_obs')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ant_obs), array('view', 'id'=>$data->id_ant_obs)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anyo')); ?>:</b>
	<?php echo CHtml::encode($data->anyo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_parto')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_parto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiempo_trabajo')); ?>:</b>
	<?php echo CHtml::encode($data->tiempo_trabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hemorragia')); ?>:</b>
	<?php echo CHtml::encode($data->hemorragia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lesion_perinial')); ?>:</b>
	<?php echo CHtml::encode($data->lesion_perinial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('toxemia')); ?>:</b>
	<?php echo CHtml::encode($data->toxemia); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('puerperio')); ?>:</b>
	<?php echo CHtml::encode($data->puerperio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peso_nino')); ?>:</b>
	<?php echo CHtml::encode($data->peso_nino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vivo')); ?>:</b>
	<?php echo CHtml::encode($data->vivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ant')); ?>:</b>
	<?php echo CHtml::encode($data->id_ant); ?>
	<br />

	*/ ?>

</div>