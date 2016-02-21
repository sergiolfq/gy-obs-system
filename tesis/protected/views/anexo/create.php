<?php
/* @var $this AnexoController */
/* @var $model Anexo */

$this->breadcrumbs=array(
	'Anexos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Anexo', 'url'=>array('index')),
	array('label'=>'Manage Anexo', 'url'=>array('admin')),
);
?>

<h1>Create Anexo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>