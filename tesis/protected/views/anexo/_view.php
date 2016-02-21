<?php
/* @var $this AnexoController */
/* @var $data Anexo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_an')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_an), array('view', 'id'=>$data->id_an)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dolor')); ?>:</b>
	<?php echo CHtml::encode($data->dolor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empastamiento')); ?>:</b>
	<?php echo CHtml::encode($data->empastamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tamano')); ?>:</b>
	<?php echo CHtml::encode($data->tamano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tumoraciones')); ?>:</b>
	<?php echo CHtml::encode($data->tumoraciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otros')); ?>:</b>
	<?php echo CHtml::encode($data->otros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />


</div>