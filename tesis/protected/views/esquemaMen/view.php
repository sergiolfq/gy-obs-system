<?php
/* @var $this EsquemaMenController */
/* @var $model EsquemaMen */
/*
$this->breadcrumbs=array(
	'Esquema Mens'=>array('index'),
	$model->id_esq,
);
*/

$this->menu=array(
//	array('label'=>'List EsquemaMen', 'url'=>array('index')),
	array('label'=>'Crear Esquema Menstrual', 'url'=>array('create')),
//	array('label'=>'View EsquemaMen', 'url'=>array('view', 'id'=>$a_1->id_esq)),
	array('label'=>'Administrar Esquema Menstrual', 'url'=>array('admin')),
   array('label'=>'Otros Aspectos Ginecológicos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Examen Físico', 'url'=>array('ExamenFisico/create')),
);
?>

<h1>Ver Esquema Menstrual </h1>

 <?php  

$this->renderPartial('_form2',array('a_1'=>$a_1,'a_2'=>$a_2,'a_3'=>$a_3,'a_4'=>$a_4));


?>


<?php
/*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_esq',
		'id_reg',
		'div1',
		'div2',
		'div3',
		'div4',
		'div5',
		'div6',
		'fecha_esq',
		'obs_esq',
		'mes_esq',
	),
)); */?>
