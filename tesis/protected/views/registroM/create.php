<?php
/* @var $this RegistroMController */
/* @var $model RegistroM */

$this->breadcrumbs=array(
	'Registro Ms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RegistroM', 'url'=>array('index')),
	array('label'=>'Manage RegistroM', 'url'=>array('admin')),
);
?>

<h1>Create RegistroM</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>