<?php
/* @var $this RegistroMController */
/* @var $data RegistroM */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_reg')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_reg), array('view', 'id'=>$data->id_reg)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_his')); ?>:</b>
	<?php echo CHtml::encode($data->id_his); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_reg')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_reg); ?>
	<br />


</div>