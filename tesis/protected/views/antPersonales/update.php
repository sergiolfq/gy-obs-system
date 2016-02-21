<?php
/* @var $this AntPersonalesController */
/* @var $model AntPersonales */

$this->breadcrumbs=array(
	'Ant Personales'=>array('index'),
	$model->id_ant_per=>array('view','id'=>$model->id_ant_per),
	'Update',
);

$this->menu=array(
	//array('label'=>'List AntPersonales', 'url'=>array('index')),
	//array('label'=>'Create AntPersonales', 'url'=>array('create')),
	//array('label'=>'View AntPersonales', 'url'=>array('view', 'id'=>$model->id_ant_per)),
//	array('label'=>'Manage AntPersonales', 'url'=>array('admin')),

      	array('label'=>'Otros Antecedentes ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Antecedentes Familiares', 'url'=>array('antFamiliares/update/'.yii::app()->user->ant->id_ant_fam)),
	array('label'=>'Hábitos Psicobiológicos', 'url'=>array('habPsicobio/update/'.yii::app()->user->ant->id_hab)),
	array('label'=>'Antecedentes Obstetricos', 'url'=>array("antObstetricos/create/")),
       
);
?>

<h1>Antecedentes Personales <?php //echo $model->id_ant_per; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
