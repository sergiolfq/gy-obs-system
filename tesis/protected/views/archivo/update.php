<?php
/* @var $this ArchivoController */
/* @var $model Archivo */

$this->breadcrumbs=array(
	'Archivos'=>array('index'),
	$model->id_arch=>array('view','id'=>$model->id_arch),
	'Update',
);

$this->menu=array(

	array('label'=>'Crear registo de ecograma o Archivo', 'url'=>array('create')),

	//array('label'=>'Administrar Archivo', 'url'=>array('admin')),
      	array('label'=>'Otras opciones','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Crear Recipe', 'url'=>array('recipe/create')),
);
?>

<h1>Actualizar registro de ecograma o archivo </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
