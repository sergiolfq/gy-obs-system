<?php
/* @var $this CuelloUterinoController */
/* @var $model CuelloUterino */

$this->breadcrumbs=array(
	'Cuello Uterinos'=>array('index'),
	$model->id_cuello_uterino,
);

$this->menu=array(
	array('label'=>'List CuelloUterino', 'url'=>array('index')),
	array('label'=>'Create CuelloUterino', 'url'=>array('create')),
	array('label'=>'Update CuelloUterino', 'url'=>array('update', 'id'=>$model->id_cuello_uterino)),
	array('label'=>'Delete CuelloUterino', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cuello_uterino),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CuelloUterino', 'url'=>array('admin')),
);
?>

<h1>View CuelloUterino #<?php echo $model->id_cuello_uterino; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cuello_uterino',
		'orificio',
		'flujos',
		'cervical',
		'sangre',
		'cervicitis',
		'leuroplasia',
		'polipos',
		'otros',
		'observaciones',
	),
)); ?>
