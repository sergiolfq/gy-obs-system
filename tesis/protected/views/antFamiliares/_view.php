<?php
/* @var $this AntFamiliaresController */
/* @var $data AntFamiliares */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ant_fam')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ant_fam), array('view', 'id'=>$data->id_ant_fam)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alergia')); ?>:</b>
	<?php echo CHtml::encode($data->alergia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('artritis')); ?>:</b>
	<?php echo CHtml::encode($data->artritis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asma')); ?>:</b>
	<?php echo CHtml::encode($data->asma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cancer')); ?>:</b>
	<?php echo CHtml::encode($data->cancer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cardiovasculares')); ?>:</b>
	<?php echo CHtml::encode($data->cardiovasculares); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diabetes')); ?>:</b>
	<?php echo CHtml::encode($data->diabetes); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('enfermedades_digestivas')); ?>:</b>
	<?php echo CHtml::encode($data->enfermedades_digestivas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enfermedades_renales')); ?>:</b>
	<?php echo CHtml::encode($data->enfermedades_renales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intoxicacion')); ?>:</b>
	<?php echo CHtml::encode($data->intoxicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('neuromentales')); ?>:</b>
	<?php echo CHtml::encode($data->neuromentales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sifilis')); ?>:</b>
	<?php echo CHtml::encode($data->sifilis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tbc')); ?>:</b>
	<?php echo CHtml::encode($data->tbc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tifoidea')); ?>:</b>
	<?php echo CHtml::encode($data->tifoidea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tosferina')); ?>:</b>
	<?php echo CHtml::encode($data->tosferina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('traumatismo')); ?>:</b>
	<?php echo CHtml::encode($data->traumatismo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vacunaciones')); ?>:</b>
	<?php echo CHtml::encode($data->vacunaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otros')); ?>:</b>
	<?php echo CHtml::encode($data->otros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	*/ ?>

</div>