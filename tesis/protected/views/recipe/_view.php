<?php
/* @var $this RecipeController */
/* @var $data Recipe */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rec')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_rec), array('view', 'id'=>$data->id_rec)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_his')); ?>:</b>
	<?php echo CHtml::encode($data->id_his); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tratamiento')); ?>:</b>
	<?php echo CHtml::encode($data->tratamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indicaciones')); ?>:</b>
	<?php echo CHtml::encode($data->indicaciones); ?>
	<br />


</div>