<?php
/* @var $this AntObstetricosController */
/* @var $model AntObstetricos */

$this->breadcrumbs=array(
	'Ant Obstetricoses'=>array('index'),
	$model->id_ant_obs,
);

$this->menu=array(
	array('label'=>'List AntObstetricos', 'url'=>array('index')),
	array('label'=>'Create AntObstetricos', 'url'=>array('create')),
	array('label'=>'Update AntObstetricos', 'url'=>array('update', 'id'=>$model->id_ant_obs)),
	array('label'=>'Delete AntObstetricos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ant_obs),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AntObstetricos', 'url'=>array('admin')),
);
?>

<h1>View AntObstetricos #<?php echo $model->id_ant_obs; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ant_obs',
		'anyo',
		'tipo_parto',
		'tiempo_trabajo',
		'hemorragia',
		'lesion_perinial',
		'toxemia',
		'puerperio',
		'peso_nino',
		'vivo',
		'sexo',
		'id_ant',
	),
)); ?>
