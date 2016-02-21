<?php
/* @var $this ExamenFisicoController */
/* @var $model ExamenFisico */
/*
$this->breadcrumbs=array(
	'Examen Fisicos'=>array('index'),
	$model->id_exa,
);*/

$this->menu=array(
	//array('label'=>'Listar Examen Fisico', 'url'=>array('index')),
	array('label'=>'Crear Examen Físico', 'url'=>array('create')),
	//array('label'=>'Ver Examen Fisico', 'url'=>array('view', 'id'=>$a->id_exa)),
	array('label'=>'Administrar Examen Físico', 'url'=>array('admin')),
      	array('label'=>'Otros Aspectos Ginecológicos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Esquema menstrual', 'url'=>array('EsquemaMen/create')),
);
?>

<h1>Ver Examen Fisico </h1>

<?php  $this->renderPartial('_form2', array('a'=>$a,'b'=>$b,'c'=>$c,'d'=>$d,'e'=>$e,'f'=>$f));  ?>
