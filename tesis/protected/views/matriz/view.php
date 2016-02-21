<?php
/* @var $this MatrizController */
/* @var $model Matriz */

$this->breadcrumbs=array(
	'Matrizs'=>array('index'),
	$model->id_mat,
);

$this->menu=array(
	array('label'=>'List Matriz', 'url'=>array('index')),
	array('label'=>'Create Matriz', 'url'=>array('create')),
	array('label'=>'Update Matriz', 'url'=>array('update', 'id'=>$model->id_mat)),
	array('label'=>'Delete Matriz', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mat),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Matriz', 'url'=>array('admin')),
);
?>

<h1>View Matriz #<?php echo $model->id_mat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_mat',
		'caracteres',
		'posicion',
		'tamano',
		'tumoraciones',
		'otros',
		'observaciones',
	),
)); ?>
