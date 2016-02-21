<?php
/* @var $this ExamenFisicoController */
/* @var $a ExamenFisico */

$this->breadcrumbs=array(
	'Examen Fisicos'=>array('index'),
	$a->id_exa=>array('view','id'=>$a->id_exa),
	'Update',
);

$this->menu=array(
	//array('label'=>'Listar Examen Fisico', 'url'=>array('index')),
	array('label'=>'Crear Examen Físico', 'url'=>array('create')),
	//array('label'=>'Ver Examen Fisico', 'url'=>array('view', 'id'=>$a->id_exa)),
	array('label'=>'Administrar Examen Físico', 'url'=>array('admin')),
      	array('label'=>'Otros Aspectos Ginecológicos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Esquema menstrual', 'url'=>array('EsquemaMen/create')),
);
?>

<h1>Actualizar Examen Físico <?php //echo $a->id_exa; ?></h1>

<?php $this->renderPartial('_form', array('a'=>$a,'b'=>$b,'c'=>$c,'d'=>$d,'e'=>$e,'f'=>$f)); ?>
