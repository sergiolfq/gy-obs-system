<?php
/* @var $this ParametriosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Parametrioses',
);

$this->menu=array(
	array('label'=>'Create Parametrios', 'url'=>array('create')),
	array('label'=>'Manage Parametrios', 'url'=>array('admin')),
);
?>

<h1>Parametrioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
