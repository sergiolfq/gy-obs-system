<?php
/* @var $this ControlPrenatalController */
/* @var $data ControlPrenatal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_con_pre')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_con_pre), array('view', 'id'=>$data->id_con_pre)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fur')); ?>:</b>
	<?php echo CHtml::encode($data->fur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eco')); ?>:</b>
	<?php echo CHtml::encode($data->eco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ta')); ?>:</b>
	<?php echo CHtml::encode($data->ta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p')); ?>:</b>
	<?php echo CHtml::encode($data->p); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('au')); ?>:</b>
	<?php echo CHtml::encode($data->au); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foco')); ?>:</b>
	<?php echo CHtml::encode($data->foco); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('presentacion')); ?>:</b>
	<?php echo CHtml::encode($data->presentacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecograma')); ?>:</b>
	<?php echo CHtml::encode($data->ecograma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('semana')); ?>:</b>
	<?php echo CHtml::encode($data->semana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('embarazo_id_emb')); ?>:</b>
	<?php echo CHtml::encode($data->embarazo_id_emb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eco_anexo')); ?>:</b>
	<?php echo CHtml::encode($data->eco_anexo); ?>
	<br />

	*/ ?>

</div>