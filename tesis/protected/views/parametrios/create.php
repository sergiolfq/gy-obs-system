<?php
/* @var $this ParametriosController */
/* @var $model Parametrios */

$this->breadcrumbs=array(
	'Parametrioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Parametrios', 'url'=>array('index')),
	array('label'=>'Manage Parametrios', 'url'=>array('admin')),
);
?>

<h1>Create Parametrios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>