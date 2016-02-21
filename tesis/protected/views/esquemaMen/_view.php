<?php
/* @var $this EsquemaMenController */
/* @var $data EsquemaMen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_esq')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_esq), array('view', 'id'=>$data->id_esq)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_reg')); ?>:</b>
	<?php echo CHtml::encode($data->id_reg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('div1')); ?>:</b>
	<?php echo CHtml::encode($data->div1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('div2')); ?>:</b>
	<?php echo CHtml::encode($data->div2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('div3')); ?>:</b>
	<?php echo CHtml::encode($data->div3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('div4')); ?>:</b>
	<?php echo CHtml::encode($data->div4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('div5')); ?>:</b>
	<?php echo CHtml::encode($data->div5); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('div6')); ?>:</b>
	<?php echo CHtml::encode($data->div6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_esq')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_esq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obs_esq')); ?>:</b>
	<?php echo CHtml::encode($data->obs_esq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mes_esq')); ?>:</b>
	<?php echo CHtml::encode($data->mes_esq); ?>
	<br />

	*/ ?>

</div>