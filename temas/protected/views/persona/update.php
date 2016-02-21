<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->id_p=>array('view','id'=>$model->id_p),
	'Update',
);

$this->menu=array(
	array('label'=>'List Persona', 'url'=>array('index')),
	array('label'=>'Create Persona', 'url'=>array('create')),
	array('label'=>'View Persona', 'url'=>array('view', 'id'=>$model->id_p)),
	array('label'=>'Manage Persona', 'url'=>array('admin')),
);
?>

<h1>Update Persona <?php echo $model->id_p; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>