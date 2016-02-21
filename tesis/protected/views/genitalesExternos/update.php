<?php
/* @var $this GenitalesExternosController */
/* @var $model GenitalesExternos */

$this->breadcrumbs=array(
	'Genitales Externoses'=>array('index'),
	$model->id_genitales_externos=>array('view','id'=>$model->id_genitales_externos),
	'Update',
);

$this->menu=array(
	array('label'=>'List GenitalesExternos', 'url'=>array('index')),
	array('label'=>'Create GenitalesExternos', 'url'=>array('create')),
	array('label'=>'View GenitalesExternos', 'url'=>array('view', 'id'=>$model->id_genitales_externos)),
	array('label'=>'Manage GenitalesExternos', 'url'=>array('admin')),
);
?>

<h1>Update GenitalesExternos <?php echo $model->id_genitales_externos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>