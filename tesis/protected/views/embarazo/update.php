<?php
/* @var $this EmbarazoController */
/* @var $model Embarazo */

$this->breadcrumbs=array(
	'Embarazos'=>array('index'),
	$model->id_emb=>array('view','id'=>$model->id_emb),
	'Update',
);

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

<h1>Actualizar Embarazo <?php //echo $model->id_emb; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
