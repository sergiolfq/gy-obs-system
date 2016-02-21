<?php
/* @var $this HistoriaController */
/* @var $model Historia */

$this->breadcrumbs=array(
	'Historia Medica '=>array('index'),
	$a->id_his=>array('view','id'=>$a->id_his),
	'',
);

$this->menu=array(
//	array('label'=>'Listar Historia', 'url'=>array('index')),
	array('label'=>'Crear Historia', 'url'=>array('persona/create')),
//	array('label'=>'Ver Historia', 'url'=>array('view', 'id'=>$a->id_his)),
	array('label'=>'Consultar otra Historia', 'url'=>array('persona/admin')),
);
?>

<h1>Historia Médica Ginecológica y Obstétrica  </h1>

<?php $this->renderPartial('_form', array('a'=>$a,'b'=>$b)); ?>
