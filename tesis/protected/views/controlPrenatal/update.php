<?php
/* @var $this ControlPrenatalController */
/* @var $model ControlPrenatal */

$this->breadcrumbs=array(
	'Control Prenatals'=>array('index'),
	$model->id_con_pre=>array('view','id'=>$model->id_con_pre),
	'Update',
);

$this->menu=array(
	//array('label'=>'List ControlPrenatal', 'url'=>array('index')),
	array('label'=>'Crear Control Prenatal', 'url'=>array('create')),
	//array('label'=>'View ControlPrenatal', 'url'=>array('view', 'id'=>$model->id_con_pre)),
	array('label'=>'Administrar Controles Prenatales de la historia actual', 'url'=>array('admin')),

      	array('label'=>'Otros Aspectos Obstétricos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Embarazo', 'url'=>array('embarazo/update/'.yii::app()->user->id_emb)),
	array('label'=>'Control Postnatal', 'url'=>array('controlPostnatal/create')),
);
?>

<h1>Actualizar Control Prenatal <?php //echo $model->id_con_pre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
