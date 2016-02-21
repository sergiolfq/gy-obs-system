<?php
/* @var $this EsquemaMenController */
/* @var $model EsquemaMen */

$this->breadcrumbs=array(
	'Esquema Menstrual'=>array('index'),
	'Crear',
);

$this->menu=array(
//	array('label'=>'Listar Esquema Menstrual', 'url'=>array('index')),
	array('label'=>'Administrar Esquema Menstrual', 'url'=>array('admin')),

      	array('label'=>'Otros Aspectos Ginecológicos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Examen Físico', 'url'=>array('ExamenFisico/create')),
);
?>

<h1>Crear Esquema Menstrual</h1>

<?php $this->renderPartial('_form', array('a_1'=>$a_1,'a_2'=>$a_2,'a_3'=>$a_3,'a_4'=>$a_4)); ?>
