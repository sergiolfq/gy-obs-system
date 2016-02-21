<?php
/* @var $this AnexoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Anexos',
);

$this->menu=array(
	array('label'=>'Create Anexo', 'url'=>array('create')),
	array('label'=>'Manage Anexo', 'url'=>array('admin')),
);
?>

<h1>Anexos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
