<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->id_p=>array('view','id'=>$model->id_p),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Personas', 'url'=>array('index')),
	array('label'=>'Crear Personas', 'url'=>array('create')),
	array('label'=>'Ver Personas', 'url'=>array('view', 'id'=>$model->id_p)),
	array('label'=>'Administrar Persona', 'url'=>array('admin')),
);
?>

<h1>Historia Medica </h1><h4><?php echo $model->nombre.'  '.$model->apellido.', '.$model->calculaedad().'años'; ?></h4>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
