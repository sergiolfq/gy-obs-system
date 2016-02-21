<?php
/* @var $this EmbarazoController */
/* @var $model Embarazo */
/*
$this->breadcrumbs=array(
	'Embarazos'=>array('index'),
	$model->id_emb,
);
*/
$this->menu=array(
	//array('label'=>'List Embarazo', 'url'=>array('index')),
//	array('label'=>'Crear Embarazo', 'url'=>array('create')),
//	array('label'=>'View Embarazo', 'url'=>array('view', 'id'=>$model->id_emb)),
	array('label'=>'Administrar Embarazos de la historia actual', 'url'=>array('admin')),

      	array('label'=>'Otros Aspectos Obstétricos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Control Prenatal', 'url'=>array('controlPrenatal/create')),
	array('label'=>'Control Postnatal', 'url'=>array('controlPostnatal/create')),
);
?>

<h1>Ver Embarazo <?php //echo $model->id_emb; ?></h1>

<?php

$this->renderPartial('_form2',array('model'=>$model));


 /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_emb',
		'peso_anterior',
		'talla',
		'fum',
		'exam_cli_hom',
		'examen_mama',
		'examen_odo',
		'pelvis',
		'papanicolau',
		'colposcopia',
		'examen_clini_cervix',
		'vdrl',
		'fecha_vdrl',
		'hb',
		'fecha_hb',
		'observaciones',
		'tipo_parto',
		'hora',
		'fecha_final',
		'muerte_fetal',
		'sexo',
		'peso',
		'vdrl_em',
		'talla_final',
		'fecha_inicial',
		'historia_id_his',
		'estado',
	),
)); */ ?>
