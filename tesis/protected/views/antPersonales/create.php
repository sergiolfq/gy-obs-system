<?php
/* @var $this AntPersonalesController */
/* @var $model AntPersonales */

$this->breadcrumbs=array(
	'Ant Personales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AntPersonales', 'url'=>array('index')),
	array('label'=>'Manage AntPersonales', 'url'=>array('admin')),
);
?>

<h1>Create Antecedentes Personales</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
