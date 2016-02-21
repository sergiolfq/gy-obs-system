<?php
/* @var $this AntObstetricosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ant Obstetricoses',
);

$this->menu=array(
	array('label'=>'Create AntObstetricos', 'url'=>array('create')),
	array('label'=>'Manage AntObstetricos', 'url'=>array('admin')),
);
?>

<h1>Ant Obstetricoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
