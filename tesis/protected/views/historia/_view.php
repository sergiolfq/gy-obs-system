<?php
/* @var $this HistoriaController */
/* @var $data Historia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_his')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_his), array('view', 'id'=>$data->id_his)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_p')); ?>:</b>
	<?php echo CHtml::encode($data->id_p); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ant')); ?>:</b>
	<?php echo CHtml::encode($data->id_ant); ?>
	<br />


</div>