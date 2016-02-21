<?php
/* @var $this MatrizController */
/* @var $data Matriz */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_mat), array('view', 'id'=>$data->id_mat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caracteres')); ?>:</b>
	<?php echo CHtml::encode($data->caracteres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('posicion')); ?>:</b>
	<?php echo CHtml::encode($data->posicion); ?>
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