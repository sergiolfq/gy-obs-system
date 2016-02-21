<?php
/* @var $this AntObstetricosController */
/* @var $model AntObstetricos */

$this->breadcrumbs=array(
	'Antecedentes Obstetricos'=>array('index'),
	$a->id_ant_obs=>array('view','id'=>$a->id_ant_obs),
	'',
);

$this->menu=array(
//	array('label'=>'Listar Antecedentes Obstetricos', 'url'=>array('index')),
	array('label'=>'Crear Antecedentes Obstetricos', 'url'=>array('create')),
//	array('label'=>'Ver Antecedentes Obstetricos', 'url'=>array('view', 'id'=>$a->id_ant_obs)),
//	array('label'=>'Administrar AntObstetricos', 'url'=>array('admin')),

      	array('label'=>'Otros Antecedentes ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Antecedentes Personales', 'url'=>array('antPersonales/update/'.yii::app()->user->ant->id_ant_per)),
	array('label'=>'Antecedentes Familiares', 'url'=>array("antFamiliares/update/".yii::app()->user->ant->id_ant_fam)),
	array('label'=>'Habitos Psicobiologicos', 'url'=>array('habPsicobio/update/'.yii::app()->user->ant->id_hab)),

);
?>

<h1>Actualizar Antecedentes Obstetricos </h1>

<?php $this->renderPartial('_form', array('a'=>$a,'b'=>$b)); ?>


