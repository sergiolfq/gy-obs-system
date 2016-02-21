<?php
/* @var $this ExamenFisicoController */
/* @var $data ExamenFisico */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_exa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_exa), array('view', 'id'=>$data->id_exa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_genitales_externos')); ?>:</b>
	<?php echo CHtml::encode($data->id_genitales_externos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cuello_uterino')); ?>:</b>
	<?php echo CHtml::encode($data->id_cuello_uterino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mat')); ?>:</b>
	<?php echo CHtml::encode($data->id_mat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_an')); ?>:</b>
	<?php echo CHtml::encode($data->id_an); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_par')); ?>:</b>
	<?php echo CHtml::encode($data->id_par); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_his')); ?>:</b>
	<?php echo CHtml::encode($data->id_his); ?>
	<br />

	*/ ?>

</div>