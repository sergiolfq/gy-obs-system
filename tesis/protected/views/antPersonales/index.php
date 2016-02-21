<?php
/* @var $this AntPersonalesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ant Personales',
);

$this->menu=array(
	array('label'=>'Create AntPersonales', 'url'=>array('create')),
	array('label'=>'Manage AntPersonales', 'url'=>array('admin')),
);
?>

<h1>Ant Personales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
