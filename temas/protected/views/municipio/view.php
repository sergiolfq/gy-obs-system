<?php
/* @var $this MunicipioController */
/* @var $model Municipio */

$this->breadcrumbs=array(
	'Municipios'=>array('index'),
	$model->id_m,
);

$this->menu=array(
	array('label'=>'List Municipio', 'url'=>array('index')),
	array('label'=>'Create Municipio', 'url'=>array('create')),
	array('label'=>'Update Municipio', 'url'=>array('update', 'id'=>$model->id_m)),
	array('label'=>'Delete Municipio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_m),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Municipio', 'url'=>array('admin')),
);
?>

<h1>View Municipio #<?php echo $model->id_m; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_m',
		'nombre_m',
		'num_pob',
	),
)); ?>
