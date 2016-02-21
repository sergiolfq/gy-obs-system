<?php
/* @var $this ArchivoController */
/* @var $data Archivo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_arch')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_arch), array('view', 'id'=>$data->id_arch)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_h')); ?>:</b>
	<?php echo CHtml::encode($data->id_h); ?>
	<br />


</div>