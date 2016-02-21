<?php
/* @var $this EmbarazoController */
/* @var $data Embarazo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_emb')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_emb), array('view', 'id'=>$data->id_emb)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peso_anterior')); ?>:</b>
	<?php echo CHtml::encode($data->peso_anterior); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('talla')); ?>:</b>
	<?php echo CHtml::encode($data->talla); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fum')); ?>:</b>
	<?php echo CHtml::encode($data->fum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('exam_cli_hom')); ?>:</b>
	<?php echo CHtml::encode($data->exam_cli_hom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('examen_mama')); ?>:</b>
	<?php echo CHtml::encode($data->examen_mama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('examen_odo')); ?>:</b>
	<?php echo CHtml::encode($data->examen_odo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pelvis')); ?>:</b>
	<?php echo CHtml::encode($data->pelvis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('papanicolau')); ?>:</b>
	<?php echo CHtml::encode($data->papanicolau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('colposcopia')); ?>:</b>
	<?php echo CHtml::encode($data->colposcopia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('examen_clini_cervix')); ?>:</b>
	<?php echo CHtml::encode($data->examen_clini_cervix); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vdrl')); ?>:</b>
	<?php echo CHtml::encode($data->vdrl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_vdrl')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_vdrl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hb')); ?>:</b>
	<?php echo CHtml::encode($data->hb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_hb')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_hb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_parto')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_parto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_final')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_final); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('muerte_fetal')); ?>:</b>
	<?php echo CHtml::encode($data->muerte_fetal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peso')); ?>:</b>
	<?php echo CHtml::encode($data->peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vdrl_em')); ?>:</b>
	<?php echo CHtml::encode($data->vdrl_em); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('talla_final')); ?>:</b>
	<?php echo CHtml::encode($data->talla_final); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicial')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('historia_id_his')); ?>:</b>
	<?php echo CHtml::encode($data->historia_id_his); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	*/ ?>

</div>