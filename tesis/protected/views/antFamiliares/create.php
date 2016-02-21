<?php
/* @var $this AntFamiliaresController */
/* @var $model AntFamiliares */

$this->breadcrumbs=array(
	'Ant Familiares'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AntFamiliares', 'url'=>array('index')),
	array('label'=>'Manage AntFamiliares', 'url'=>array('admin')),
);
?>

<h1>Create AntFamiliares</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>