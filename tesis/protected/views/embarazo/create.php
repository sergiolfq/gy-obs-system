<?php
/* @var $this EmbarazoController */
/* @var $model Embarazo */

$this->breadcrumbs=array(
	'Embarazos'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Embarazo', 'url'=>array('index')),
	array('label'=>'Administrar Embarazos de la historia actual', 'url'=>array('admin')),

      	array('label'=>'Otros Aspectos Obstétricos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Control Prenatal', 'url'=>array('controlPrenatal/admin')),
	array('label'=>'Control Postnatal', 'url'=>array('controlPostnatal/admin')),
);
?>

<h1>Crear Registro de Embarazo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
