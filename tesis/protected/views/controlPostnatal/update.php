<?php
/* @var $this ControlPostnatalController */
/* @var $model ControlPostnatal */

$this->breadcrumbs=array(
	'Control Postnatals'=>array('index'),
	$model->id_cont_post=>array('view','id'=>$model->id_cont_post),
	'Update',
);

$this->menu=array(
	//array('label'=>'List ControlPostnatal', 'url'=>array('index')),
	array('label'=>'Crear Control Postnatal', 'url'=>array('create')),
     // array('label'=>'View ControlPostnatal', 'url'=>array('view', 'id'=>$model->id_cont_post)),
	array('label'=>'Administrar Controles Postnatales de la historia actual', 'url'=>array('admin')),
      
      	array('label'=>'Otros Aspectos Obstétricos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Embarazo', 'url'=>array('embarazo/update/'.yii::app()->user->id_emb)),
	array('label'=>'Control Prenatal', 'url'=>array('controlPrenatal/create')),
);
?>

<h1>Actualizar Control Postnatal <?php //echo $model->id_cont_post; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
