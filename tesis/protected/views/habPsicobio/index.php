<?php
/* @var $this HabPsicobioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hab Psicobios',
);

$this->menu=array(
	array('label'=>'Create HabPsicobio', 'url'=>array('create')),
	array('label'=>'Manage HabPsicobio', 'url'=>array('admin')),
);
?>

<h1>Hab Psicobios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
