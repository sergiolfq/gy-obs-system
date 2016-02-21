<?php
/* @var $this ExamenFisicoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Examen Fisicos',
);

$this->menu=array(
	array('label'=>'Create ExamenFisico', 'url'=>array('create')),
	array('label'=>'Manage ExamenFisico', 'url'=>array('admin')),
);
?>

<h1>Examen Fisicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
