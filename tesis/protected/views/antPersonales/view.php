<?php
/* @var $this AntPersonalesController */
/* @var $model AntPersonales */

$this->breadcrumbs=array(
	'Ant Personales'=>array('index'),
	$model->id_ant_per,
);

$this->menu=array(
	array('label'=>'List AntPersonales', 'url'=>array('index')),
	array('label'=>'Create AntPersonales', 'url'=>array('create')),
	array('label'=>'Update AntPersonales', 'url'=>array('update', 'id'=>$model->id_ant_per)),
	array('label'=>'Delete AntPersonales', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ant_per),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AntPersonales', 'url'=>array('admin')),
);
?>

<h1>View AntPersonales #<?php echo $model->id_ant_per; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ant_per',
		'abenitis',
		'alergia',
		'amigdalitis',
		'artritis',
		'asma',
		'blenorragia',
		'buba',
		'catarros',
		'chagas',
		'chancros',
		'difteria',
		'diarreas',
		'hansen',
		'influenza',
		'lechina',
		'necatoriasis',
		'neumonia',
		'otitis',
		'paludismo',
		'parasitos',
		'parotitis',
		'pleuresia',
		'quirurgicos',
		'rinofaringitis',
		'rubeola',
		'sarampion',
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
