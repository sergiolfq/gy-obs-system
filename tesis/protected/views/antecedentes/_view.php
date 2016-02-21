<?php
/* @var $this AntecedentesController */
/* @var $data Antecedentes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ant')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ant), array('view', 'id'=>$data->id_ant)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ant_per')); ?>:</b>
	<?php echo CHtml::encode($data->id_ant_per); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ant_fam')); ?>:</b>
	<?php echo CHtml::encode($data->id_ant_fam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_hab')); ?>:</b>
	<?php echo CHtml::encode($data->id_hab); ?>
	<br />


</div>