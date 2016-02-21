<?php
/* @var $this ControlPostnatalController */
/* @var $data ControlPostnatal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cont_post')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cont_post), array('view', 'id'=>$data->id_cont_post)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_emb')); ?>:</b>
	<?php echo CHtml::encode($data->id_emb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peso')); ?>:</b>
	<?php echo CHtml::encode($data->peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tension')); ?>:</b>
	<?php echo CHtml::encode($data->tension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('involucion')); ?>:</b>
	<?php echo CHtml::encode($data->involucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('herida_qui')); ?>:</b>
	<?php echo CHtml::encode($data->herida_qui); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('epiciotomia')); ?>:</b>
	<?php echo CHtml::encode($data->epiciotomia); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sangrado_gen')); ?>:</b>
	<?php echo CHtml::encode($data->sangrado_gen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edema_mien_inf')); ?>:</b>
	<?php echo CHtml::encode($data->edema_mien_inf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anticoceptivo')); ?>:</b>
	<?php echo CHtml::encode($data->anticoceptivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_con')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_con); ?>
	<br />

	*/ ?>

</div>