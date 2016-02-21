<?php
/* @var $this EmbarazoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Embarazos',
);

$this->menu=array(
	array('label'=>'Create Embarazo', 'url'=>array('create')),
	array('label'=>'Manage Embarazo', 'url'=>array('admin')),
);
?>

<h1>Embarazos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
