<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */

$this->breadcrumbs=array(
	'Antecedentes'=>array('index'),
	$model->id_ant,
);

$this->menu=array(
	array('label'=>'List Antecedentes', 'url'=>array('index')),
	array('label'=>'Create Antecedentes', 'url'=>array('create')),
	array('label'=>'Update Antecedentes', 'url'=>array('update', 'id'=>$model->id_ant)),
	array('label'=>'Delete Antecedentes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ant),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Antecedentes', 'url'=>array('admin')),
);
?>

<h1>View Antecedentes #<?php echo $model->id_ant; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ant',
		'id_ant_per',
		'id_ant_fam',
		'id_hab',
	),
)); ?>
