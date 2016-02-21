<?php
/* @var $this ExamenFisicoController */
/* @var $model ExamenFisico */

$this->breadcrumbs=array(
	'Examen Fisico'=>array('index'),
	'Create',
);

$this->menu=array(
//	array('label'=>'Listar Examen Fisico', 'url'=>array('index')),
	array('label'=>'Administrar Examen Fisico', 'url'=>array('admin')),

      	array('label'=>'Otros Aspectos Ginecológicos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Esquema menstrual', 'url'=>array('EsquemaMen/create')),
	

);
?>

<h1>Crear Examen Físico</h1>

<?php $this->renderPartial('_form', array('a'=>$a,'b'=>$b,'c'=>$c,'d'=>$d,'e'=>$e,'f'=>$f)); ?>
