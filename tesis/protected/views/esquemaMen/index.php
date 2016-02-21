<?php
/* @var $this EsquemaMenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Esquema Mens',
);

$this->menu=array(
	array('label'=>'Create EsquemaMen', 'url'=>array('create')),
	array('label'=>'Manage EsquemaMen', 'url'=>array('admin')),
);
?>

<h1>Esquema Mens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
