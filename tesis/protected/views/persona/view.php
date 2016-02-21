<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->id_p,
);

$this->menu=array(
	array('label'=>'Listar Persona', 'url'=>array('index')),
	array('label'=>'Crear Persona', 'url'=>array('create')),
	array('label'=>'Modificar Persona', 'url'=>array('update', 'id'=>$model->id_p)),
	array('label'=>'Borrar Persona', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_p),'confirm'=>'esta seguro que desea borrar esta persona?')),
	array('label'=>'Manage Persona', 'url'=>array('admin')),
);
?>

<h1>View Persona #<?php echo $model->id_p; ?></h1>

<?php /* $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_p',
		'nombre',
		'apellido',
		'domicilio',
		'fecha_nac',
	//	'id_es',
                'idEs.descripcion_es',
	//	'id_gru',
		'idGru.descripcion_gru',
		'cedula',
		'telefono',
		'tlf_eme',
		'correo',
	),
));*/ ?>
