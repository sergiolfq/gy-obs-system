<?php
/* @var $this CuelloUterinoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cuello Uterinos',
);

$this->menu=array(
	array('label'=>'Create CuelloUterino', 'url'=>array('create')),
	array('label'=>'Manage CuelloUterino', 'url'=>array('admin')),
);
?>

<h1>Cuello Uterinos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
