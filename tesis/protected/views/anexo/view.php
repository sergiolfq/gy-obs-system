<?php
/* @var $this AnexoController */
/* @var $model Anexo */

$this->breadcrumbs=array(
	'Anexos'=>array('index'),
	$model->id_an,
);

$this->menu=array(
	array('label'=>'List Anexo', 'url'=>array('index')),
	array('label'=>'Create Anexo', 'url'=>array('create')),
	array('label'=>'Update Anexo', 'url'=>array('update', 'id'=>$model->id_an)),
	array('label'=>'Delete Anexo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_an),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Anexo', 'url'=>array('admin')),
);
?>

<h1>View Anexo #<?php echo $model->id_an; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_an',
		'dolor',
		'empastamiento',
		'tamano',
		'tumoraciones',
		'otros',
		'observaciones',
	),
)); ?>
