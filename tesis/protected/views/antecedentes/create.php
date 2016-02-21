<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */

$this->breadcrumbs=array(
	'Antecedentes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Antecedentes', 'url'=>array('index')),
	array('label'=>'Manage Antecedentes', 'url'=>array('admin')),
);
?>

<h1>Create Antecedentes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>