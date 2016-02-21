<?php
/* @var $this CuelloUterinoController */
/* @var $model CuelloUterino */

$this->breadcrumbs=array(
	'Cuello Uterinos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CuelloUterino', 'url'=>array('index')),
	array('label'=>'Manage CuelloUterino', 'url'=>array('admin')),
);
?>

<h1>Create CuelloUterino</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>