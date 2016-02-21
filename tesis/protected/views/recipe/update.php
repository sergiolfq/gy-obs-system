<?php
/* @var $this RecipeController */
/* @var $model Recipe */

$this->breadcrumbs=array(
	'Recipes'=>array('index'),
	$model->id_rec=>array('view','id'=>$model->id_rec),
	'Update',
);

$this->menu=array(
	//array('label'=>'Listar Recipe', 'url'=>array('index')),
	array('label'=>'Crear Récipe', 'url'=>array('create')),
	//array('label'=>'Ver Recipe', 'url'=>array('view', 'id'=>$model->id_rec)),
	//array('label'=>'Administrar Recipes', 'url'=>array('admin')),
array('label'=>'Otras opciones','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Crear Archivo', 'url'=>array('archivo/create')),

);
?>

<h1>Actualizar R&eacutecipe <?php //echo $model->id_rec; ?></h1>
<?php 
//var_dump(yii::app()->request->urlReferrer);
//yii::app()->end();

if( strpos(yii::app()->request->urlReferrer,'create')!==false  )

echo'<script type="text/javascript" language="javascript"> 
 window.open("'.Yii::app()->getBaseUrl(true).'/recipe/ver/'.$model->id_rec.'","DescriptiveWindowName","resizable,scrollbars,status");</script>';

?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
