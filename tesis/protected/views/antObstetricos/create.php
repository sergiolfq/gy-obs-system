<?php
/* @var $this AntObstetricosController */
/* @var $model AntObstetricos */

$this->breadcrumbs=array(
	'Antecedentes Obstetricos '=>array('index'),
	'Create',
);

$this->menu=array(
//	array('label'=>'List AntObstetricos', 'url'=>array('index')),
//	array('label'=>'Manage AntObstetricos', 'url'=>array('admin')),
      	array('label'=>'Otros Antecedentes ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Antecedentes Personales', 'url'=>array('antPersonales/update/'.yii::app()->user->ant->id_ant_per)),
	array('label'=>'Antecedentes Familiares', 'url'=>array("antFamiliares/update/".yii::app()->user->ant->id_ant_fam)),
	array('label'=>'Hábitos Psicobiológicos', 'url'=>array('habPsicobio/update/'.yii::app()->user->ant->id_hab)),

);
?>

<h1>Antecedentes Obstétricos</h1>

<?php $this->renderPartial('_form', array('a'=>$a,'b'=>$b)); ?>
