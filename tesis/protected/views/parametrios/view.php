<?php
/* @var $this ParametriosController */
/* @var $model Parametrios */

$this->breadcrumbs=array(
	'Parametrioses'=>array('index'),
	$model->id_par,
);

$this->menu=array(
	array('label'=>'List Parametrios', 'url'=>array('index')),
	array('label'=>'Create Parametrios', 'url'=>array('create')),
	array('label'=>'Update Parametrios', 'url'=>array('update', 'id'=>$model->id_par)),
	array('label'=>'Delete Parametrios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_par),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Parametrios', 'url'=>array('admin')),
);
?>

<h1>View Parametrios #<?php echo $model->id_par; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_par',
		'induracion',
		'tumores',
		'otros',
		'observaciones',
	),
)); ?>
