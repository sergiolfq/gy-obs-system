<?php
/* @var $this AntFamiliaresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ant Familiares',
);

$this->menu=array(
	array('label'=>'Create AntFamiliares', 'url'=>array('create')),
	array('label'=>'Manage AntFamiliares', 'url'=>array('admin')),
);
?>

<h1>Ant Familiares</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
