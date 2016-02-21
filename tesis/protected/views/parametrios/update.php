<?php
/* @var $this ParametriosController */
/* @var $model Parametrios */

$this->breadcrumbs=array(
	'Parametrioses'=>array('index'),
	$model->id_par=>array('view','id'=>$model->id_par),
	'Update',
);

$this->menu=array(
	array('label'=>'List Parametrios', 'url'=>array('index')),
	array('label'=>'Create Parametrios', 'url'=>array('create')),
	array('label'=>'View Parametrios', 'url'=>array('view', 'id'=>$model->id_par)),
	array('label'=>'Manage Parametrios', 'url'=>array('admin')),
);
?>

<h1>Update Parametrios <?php echo $model->id_par; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>