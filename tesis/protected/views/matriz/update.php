<?php
/* @var $this MatrizController */
/* @var $model Matriz */

$this->breadcrumbs=array(
	'Matrizs'=>array('index'),
	$model->id_mat=>array('view','id'=>$model->id_mat),
	'Update',
);

$this->menu=array(
	array('label'=>'List Matriz', 'url'=>array('index')),
	array('label'=>'Create Matriz', 'url'=>array('create')),
	array('label'=>'View Matriz', 'url'=>array('view', 'id'=>$model->id_mat)),
	array('label'=>'Manage Matriz', 'url'=>array('admin')),
);
?>

<h1>Update Matriz <?php echo $model->id_mat; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>