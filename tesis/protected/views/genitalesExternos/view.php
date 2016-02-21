<?php
/* @var $this GenitalesExternosController */
/* @var $model GenitalesExternos */

$this->breadcrumbs=array(
	'Genitales Externoses'=>array('index'),
	$model->id_genitales_externos,
);

$this->menu=array(
	array('label'=>'List GenitalesExternos', 'url'=>array('index')),
	array('label'=>'Create GenitalesExternos', 'url'=>array('create')),
	array('label'=>'Update GenitalesExternos', 'url'=>array('update', 'id'=>$model->id_genitales_externos)),
	array('label'=>'Delete GenitalesExternos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_genitales_externos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GenitalesExternos', 'url'=>array('admin')),
);
?>

<h1>View GenitalesExternos #<?php echo $model->id_genitales_externos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_genitales_externos',
		'labios',
		'g_bartholine',
		'g_skane',
		'meato_uretral',
		'himen',
		'perine',
		'vagina',
		'inspeccion_esfuerzo',
		'otros',
		'observaciones',
	),
)); ?>
