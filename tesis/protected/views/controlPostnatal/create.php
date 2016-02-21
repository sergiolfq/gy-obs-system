<?php
/* @var $this ControlPostnatalController */
/* @var $model ControlPostnatal */

$this->breadcrumbs=array(
	'Control Postnatals'=>array('index'),
	'Create',
);
if(isset(yii::app()->user->id_emb)){
$emb='update/'.yii::app()->user->id_emb;
$opc='create'; 

$this->menu=array(
	//array('label'=>'List ControlPostnatal', 'url'=>array('index')),
	array('label'=>'Administrar Controles Postnatales de la historia actual', 'url'=>array('admin')),
      
      	array('label'=>'Otros Aspectos Obstétricos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Embarazo', 'url'=>array('embarazo/'.$emb)),
	array('label'=>'Control Prenatal', 'url'=>array('controlPrenatal/'.$opc)),
);


}


?>

<h1>Crear Control Postnatal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
