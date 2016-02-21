<?php
/* @var $this HabPsicobioController */
/* @var $model HabPsicobio */

$this->breadcrumbs=array(
	'Hab Psicobios'=>array('index'),
	$model->id_hab=>array('view','id'=>$model->id_hab),
	'Update',
);

$this->menu=array(
	//array('label'=>'List HabPsicobio', 'url'=>array('index')),
	//array('label'=>'Create HabPsicobio', 'url'=>array('create')),
	//array('label'=>'View HabPsicobio', 'url'=>array('view', 'id'=>$model->id_hab)),
	//array('label'=>'Manage HabPsicobio', 'url'=>array('admin')),

      	array('label'=>'Otros Antecedentes ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Antecedentes Personales', 'url'=>array('antPersonales/update/'.yii::app()->user->ant->id_ant_per)),
	array('label'=>'Antecedentes Familiares', 'url'=>array('antFamiliares/update/'.yii::app()->user->ant->id_ant_fam)),
	array('label'=>'Antecedentes Obstétricos', 'url'=>array("antObstetricos/create/")),
);
?>

<h1>Hábitos Psicobiológicos <?php //echo $model->id_hab; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
