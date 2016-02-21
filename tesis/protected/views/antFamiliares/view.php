<?php
/* @var $this AntFamiliaresController */
/* @var $model AntFamiliares */

$this->breadcrumbs=array(
	'Ant Familiares'=>array('index'),
	$model->id_ant_fam,
);

$this->menu=array(
	array('label'=>'List AntFamiliares', 'url'=>array('index')),
	array('label'=>'Create AntFamiliares', 'url'=>array('create')),
	array('label'=>'Update AntFamiliares', 'url'=>array('update', 'id'=>$model->id_ant_fam)),
	array('label'=>'Delete AntFamiliares', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ant_fam),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AntFamiliares', 'url'=>array('admin')),
);
?>

<h1>View AntFamiliares #<?php echo $model->id_ant_fam; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ant_fam',
		'alergia',
		'artritis',
		'asma',
		'cancer',
		'cardiovasculares',
		'diabetes',
		'enfermedades_digestivas',
		'enfermedades_renales',
		'intoxicacion',
		'neuromentales',
		'sifilis',
		'tbc',
		'tifoidea',
		'tosferina',
		'traumatismo',
		'vacunaciones',
		'otros',
		'observaciones',
	),
)); ?>
