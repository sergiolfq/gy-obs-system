<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	'Create',
);

$this->menu=array(
//	array('label'=>'List Persona', 'url'=>array('index')),
	array('label'=>'Consultar una historia', 'url'=>array('admin')),
);
?>
<div><h1>Historia M&eacutedica Ginecol&oacutegica y Obst&eacutetrica </h1></div>
<h2>Crear Persona</h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
