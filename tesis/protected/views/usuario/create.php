<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Create Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>