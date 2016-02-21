<?php
/* @var $this ControlPrenatalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Control Prenatals',
);

$this->menu=array(
	array('label'=>'Create ControlPrenatal', 'url'=>array('create')),
	array('label'=>'Manage ControlPrenatal', 'url'=>array('admin')),
);
?>

<h1>Control Prenatals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
