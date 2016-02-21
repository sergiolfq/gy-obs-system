<?php
/* @var $this AntecedentesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Antecedentes',
);

$this->menu=array(
	array('label'=>'Create Antecedentes', 'url'=>array('create')),
	array('label'=>'Manage Antecedentes', 'url'=>array('admin')),
);
?>

<h1>Antecedentes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
