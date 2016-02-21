<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */

$this->breadcrumbs=array(
	'Antecedentes'=>array('index'),
	$model->id_ant=>array('view','id'=>$model->id_ant),
	'Update',
);

$this->menu=array(
	array('label'=>'List Antecedentes', 'url'=>array('index')),
	array('label'=>'Create Antecedentes', 'url'=>array('create')),
	array('label'=>'View Antecedentes', 'url'=>array('view', 'id'=>$model->id_ant)),
	array('label'=>'Manage Antecedentes', 'url'=>array('admin')),
);
?>

<h1>Update Antecedentes <?php echo $model->id_ant; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>