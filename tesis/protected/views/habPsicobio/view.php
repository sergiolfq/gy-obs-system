<?php
/* @var $this HabPsicobioController */
/* @var $model HabPsicobio */

$this->breadcrumbs=array(
	'Hab Psicobios'=>array('index'),
	$model->id_hab,
);

$this->menu=array(
	array('label'=>'List HabPsicobio', 'url'=>array('index')),
	array('label'=>'Create HabPsicobio', 'url'=>array('create')),
	array('label'=>'Update HabPsicobio', 'url'=>array('update', 'id'=>$model->id_hab)),
	array('label'=>'Delete HabPsicobio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_hab),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HabPsicobio', 'url'=>array('admin')),
);
?>

<h1>View HabPsicobio #<?php echo $model->id_hab; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_hab',
		'alcohol',
		'chimo',
		'deportes',
		'drogas',
		'ocupacion',
		'problemas_familiares',
		'rasgos_personales',
		'siesta',
		'otros',
		'observaciones',
	),
)); ?>
