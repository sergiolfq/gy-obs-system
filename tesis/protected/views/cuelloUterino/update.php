<?php
/* @var $this CuelloUterinoController */
/* @var $model CuelloUterino */

$this->breadcrumbs=array(
	'Cuello Uterinos'=>array('index'),
	$model->id_cuello_uterino=>array('view','id'=>$model->id_cuello_uterino),
	'Update',
);

$this->menu=array(
	array('label'=>'List CuelloUterino', 'url'=>array('index')),
	array('label'=>'Create CuelloUterino', 'url'=>array('create')),
	array('label'=>'View CuelloUterino', 'url'=>array('view', 'id'=>$model->id_cuello_uterino)),
	array('label'=>'Manage CuelloUterino', 'url'=>array('admin')),
);
?>

<h1>Update CuelloUterino <?php echo $model->id_cuello_uterino; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>