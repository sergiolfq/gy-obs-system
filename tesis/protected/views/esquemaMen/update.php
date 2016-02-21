<?php
/* @var $this EsquemaMenController */
/* @var $a_1 EsquemaMen */

$this->breadcrumbs=array(
	'Esquema Mens'=>array('index'),
	//$a_1->id_esq=>array('view','id'=>$a_1->id_esq),
	'Update',
);

$this->menu=array(
//	array('label'=>'List EsquemaMen', 'url'=>array('index')),
	array('label'=>'Crear Esquema Menstrual', 'url'=>array('create')),
//	array('label'=>'View EsquemaMen', 'url'=>array('view', 'id'=>$a_1->id_esq)),
	array('label'=>'Administrar Esquema Menstrual', 'url'=>array('admin')),

      	array('label'=>'Otros Aspectos Ginecológicos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Examen Físico', 'url'=>array('ExamenFisico/create')),
);
?>

<h1>Actualizar Esquema Menstrual <?php //echo $a_1->id_esq; ?></h1>

<?php $this->renderPartial('_form', array('a_1'=>$a_1,'a_2'=>$a_2,'a_3'=>$a_3,'a_4'=>$a_4)); ?>
