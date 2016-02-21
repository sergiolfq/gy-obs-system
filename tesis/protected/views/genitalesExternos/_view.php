<?php
/* @var $this GenitalesExternosController */
/* @var $data GenitalesExternos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_genitales_externos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_genitales_externos), array('view', 'id'=>$data->id_genitales_externos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('labios')); ?>:</b>
	<?php echo CHtml::encode($data->labios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('g_bartholine')); ?>:</b>
	<?php echo CHtml::encode($data->g_bartholine); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('g_skane')); ?>:</b>
	<?php echo CHtml::encode($data->g_skane); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meato_uretral')); ?>:</b>
	<?php echo CHtml::encode($data->meato_uretral); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('himen')); ?>:</b>
	<?php echo CHtml::encode($data->himen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perine')); ?>:</b>
	<?php echo CHtml::encode($data->perine); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('vagina')); ?>:</b>
	<?php echo CHtml::encode($data->vagina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inspeccion_esfuerzo')); ?>:</b>
	<?php echo CHtml::encode($data->inspeccion_esfuerzo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otros')); ?>:</b>
	<?php echo CHtml::encode($data->otros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	*/ ?>

</div>