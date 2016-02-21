<?php
/* @var $this CuelloUterinoController */
/* @var $data CuelloUterino */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cuello_uterino')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cuello_uterino), array('view', 'id'=>$data->id_cuello_uterino)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orificio')); ?>:</b>
	<?php echo CHtml::encode($data->orificio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flujos')); ?>:</b>
	<?php echo CHtml::encode($data->flujos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cervical')); ?>:</b>
	<?php echo CHtml::encode($data->cervical); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sangre')); ?>:</b>
	<?php echo CHtml::encode($data->sangre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cervicitis')); ?>:</b>
	<?php echo CHtml::encode($data->cervicitis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leuroplasia')); ?>:</b>
	<?php echo CHtml::encode($data->leuroplasia); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('polipos')); ?>:</b>
	<?php echo CHtml::encode($data->polipos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otros')); ?>:</b>
	<?php echo CHtml::encode($data->otros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	*/ ?>

</div>