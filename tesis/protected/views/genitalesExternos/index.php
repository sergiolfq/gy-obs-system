<?php
/* @var $this GenitalesExternosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Genitales Externoses',
);

$this->menu=array(
	array('label'=>'Create GenitalesExternos', 'url'=>array('create')),
	array('label'=>'Manage GenitalesExternos', 'url'=>array('admin')),
);
?>

<h1>Genitales Externoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
