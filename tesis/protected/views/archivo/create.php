<?php
/* @var $this ArchivoController */
/* @var $model Archivo */

$this->breadcrumbs=array(
	'Archivos'=>array('index'),
	'Create',
);

$this->menu=array(

	//array('label'=>'Administrar todos los Archivos', 'url'=>array('admin')),
	array('label'=>'Otras opciones','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Crear Recipe', 'url'=>array('recipe/create')),

);
?>

<h1>Crear registro de ecograma o archivo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
