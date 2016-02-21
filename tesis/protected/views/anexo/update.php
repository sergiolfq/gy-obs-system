<?php
/* @var $this AnexoController */
/* @var $model Anexo */

$this->breadcrumbs=array(
	'Anexos'=>array('index'),
	$model->id_an=>array('view','id'=>$model->id_an),
	'Update',
);

$this->menu=array(
	array('label'=>'List Anexo', 'url'=>array('index')),
	array('label'=>'Create Anexo', 'url'=>array('create')),
	array('label'=>'View Anexo', 'url'=>array('view', 'id'=>$model->id_an)),
	array('label'=>'Manage Anexo', 'url'=>array('admin')),
);
?>

<h1>Update Anexo <?php echo $model->id_an; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>