<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->name=>array('view','id'=>$model->id_u),
	'Modificar',
);

$usuario=yii::app()->user->name;
$this->menu=array(
	//array('label'=>'Listar Usuario', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create'),'visible'=>(yii::app()->user->name=='super')),
	array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->id_u),'visible'=>(yii::app()->user->name=='super')),
	array('label'=>'Administrar Usuario', 'url'=>array('admin'),'visible'=>(yii::app()->user->name=='super')),
);
?>

<h1>Modificar Usuario <?php //echo $model->id_u; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
