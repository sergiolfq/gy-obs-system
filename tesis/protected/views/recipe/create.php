<?php
/* @var $this RecipeController */
/* @var $model Recipe */

$this->breadcrumbs=array(
	'Recipes'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'Listar Recipes', 'url'=>array('index')),
	//array('label'=>'Administrar Recipes', 'url'=>array('admin')),
	array('label'=>'Otras opciones','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Crear Archivo', 'url'=>array('archivo/create')),

);
?>

<h1>Crear R&eacutecipe</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
