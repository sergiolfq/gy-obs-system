<?php
/* @var $this HabPsicobioController */
/* @var $data HabPsicobio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_hab')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_hab), array('view', 'id'=>$data->id_hab)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alcohol')); ?>:</b>
	<?php echo CHtml::encode($data->alcohol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chimo')); ?>:</b>
	<?php echo CHtml::encode($data->chimo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deportes')); ?>:</b>
	<?php echo CHtml::encode($data->deportes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('drogas')); ?>:</b>
	<?php echo CHtml::encode($data->drogas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ocupacion')); ?>:</b>
	<?php echo CHtml::encode($data->ocupacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('problemas_familiares')); ?>:</b>
	<?php echo CHtml::encode($data->problemas_familiares); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('rasgos_personales')); ?>:</b>
	<?php echo CHtml::encode($data->rasgos_personales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('siesta')); ?>:</b>
	<?php echo CHtml::encode($data->siesta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otros')); ?>:</b>
	<?php echo CHtml::encode($data->otros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	*/ ?>

</div>