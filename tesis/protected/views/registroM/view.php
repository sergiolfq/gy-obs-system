<?php
/* @var $this RegistroMController */
/* @var $model RegistroM */

$this->breadcrumbs=array(
	'Registro Ms'=>array('index'),
	$model->id_reg,
);

$this->menu=array(
	array('label'=>'List RegistroM', 'url'=>array('index')),
	array('label'=>'Create RegistroM', 'url'=>array('create')),
	array('label'=>'Update RegistroM', 'url'=>array('update', 'id'=>$model->id_reg)),
	array('label'=>'Delete RegistroM', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_reg),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RegistroM', 'url'=>array('admin')),
);
?>

<h1>View RegistroM #<?php echo $model->id_reg; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_reg',
		'id_his',
		'fecha_reg',
	),
)); ?>
