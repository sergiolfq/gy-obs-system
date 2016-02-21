<?php
/* @var $this AntFamiliaresController */
/* @var $model AntFamiliares */

$this->breadcrumbs=array(
	'Antecedentes Familiares'=>array('index'),
	$model->id_ant_fam=>array('view','id'=>$model->id_ant_fam),
	'Update',
);

$this->menu=array(
	//array('label'=>'List AntFamiliares', 'url'=>array('index')),
	//array('label'=>'Create AntFamiliares', 'url'=>array('create')),
	//array('label'=>'View AntFamiliares', 'url'=>array('view', 'id'=>$model->id_ant_fam)),
	//array('label'=>'Manage AntFamiliares', 'url'=>array('admin')),

      	array('label'=>'Otros Antecedentes ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Antecedentes Personales', 'url'=>array('antPersonales/update/'.yii::app()->user->ant->id_ant_per)),
	array('label'=>'Hábitos Psicobiológicos', 'url'=>array('habPsicobio/update/'.yii::app()->user->ant->id_hab)),
	array('label'=>'Antecedentes Obstétricos', 'url'=>array("antObstetricos/create/")),
);
?>

<h1> Antecedentes Familiares <?php //echo $model->id_ant_fam; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
