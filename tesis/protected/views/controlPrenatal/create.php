<?php
/* @var $this ControlPrenatalController */
/* @var $model ControlPrenatal */

$this->breadcrumbs=array(
	'Control Prenatals'=>array('index'),
	'Create',
);

if(isset(yii::app()->user->id_emb))
$emb='update/'.yii::app()->user->id_emb;
else 
$emb='create';


$this->menu=array(
	///array('label'=>'List ControlPrenatal', 'url'=>array('index')),
	array('label'=>'Administrar Controles Prenatales de la historia actual ', 'url'=>array('admin')),

      	array('label'=>'Otros Aspectos Obstétricos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Embarazo', 'url'=>array('embarazo/'.$emb)),
	array('label'=>'Control Postnatal', 'url'=>array('controlPostnatal/create')),
);
?>

<h1>Crear Control Prenatal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
