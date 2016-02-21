<?php
/* @var $this GenitalesExternosController */
/* @var $model GenitalesExternos */

$this->breadcrumbs=array(
	'Genitales Externoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GenitalesExternos', 'url'=>array('index')),
	array('label'=>'Manage GenitalesExternos', 'url'=>array('admin')),
);
?>

<h1>Create GenitalesExternos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>