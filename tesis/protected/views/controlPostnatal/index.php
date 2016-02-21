<?php
/* @var $this ControlPostnatalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Control Postnatals',
);

$this->menu=array(
	array('label'=>'Create ControlPostnatal', 'url'=>array('create')),
	array('label'=>'Manage ControlPostnatal', 'url'=>array('admin')),
);
?>

<h1>Control Postnatals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
