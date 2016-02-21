<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->name,
);

$this->menu=array(
	//array('label'=>'Listar Usuario', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Modificar Usuario', 'url'=>array('update', 'id'=>$model->id_u)),
	array('label'=>'Borrar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_u),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar usuarios', 'url'=>array('admin')),
);
?>

<h1>Ver Usuario #<?php echo $model->id_u; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_u',
		'name',
	//	'password',
		'rol',
		'nombre',
		'apellido',
		'ci',
		'registro',
	),
)); ?>
