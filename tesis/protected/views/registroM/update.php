<?php
/* @var $this RegistroMController */
/* @var $model RegistroM */

$this->breadcrumbs=array(
	'Registro Ms'=>array('index'),
	$model->id_reg=>array('view','id'=>$model->id_reg),
	'Update',
);

$this->menu=array(
	array('label'=>'List RegistroM', 'url'=>array('index')),
	array('label'=>'Create RegistroM', 'url'=>array('create')),
	array('label'=>'View RegistroM', 'url'=>array('view', 'id'=>$model->id_reg)),
	array('label'=>'Manage RegistroM', 'url'=>array('admin')),
);
?>

<h1>Update RegistroM <?php echo $model->id_reg; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>