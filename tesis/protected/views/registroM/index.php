<?php
/* @var $this RegistroMController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Registro Ms',
);

$this->menu=array(
	array('label'=>'Create RegistroM', 'url'=>array('create')),
	array('label'=>'Manage RegistroM', 'url'=>array('admin')),
);
?>

<h1>Registro Ms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
