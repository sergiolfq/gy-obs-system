<?php
/* @var $this HabPsicobioController */
/* @var $model HabPsicobio */

$this->breadcrumbs=array(
	'Hab Psicobios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HabPsicobio', 'url'=>array('index')),
	array('label'=>'Manage HabPsicobio', 'url'=>array('admin')),
);
?>

<h1>Create HabPsicobio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>