<?php
/* @var $this ParametriosController */
/* @var $data Parametrios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_par')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_par), array('view', 'id'=>$data->id_par)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('induracion')); ?>:</b>
	<?php echo CHtml::encode($data->induracion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tumores')); ?>:</b>
	<?php echo CHtml::encode($data->tumores); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otros')); ?>:</b>
	<?php echo CHtml::encode($data->otros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />


</div>