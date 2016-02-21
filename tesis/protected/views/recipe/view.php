<?php
/* @var $this RecipeController */
/* @var $model Recipe */

$this->breadcrumbs=array(
	'Recipes'=>array('index'),
	$model->id_rec,
);

$this->menu=array(
	array('label'=>'List Recipe', 'url'=>array('index')),
	array('label'=>'Create Recipe', 'url'=>array('create')),
	array('label'=>'Update Recipe', 'url'=>array('update', 'id'=>$model->id_rec)),
	array('label'=>'Delete Recipe', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_rec),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Recipe', 'url'=>array('admin')),
);
?>

<h1>View Recipe #<?php echo $model->id_rec; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_rec',
		'id_his',
		'tratamiento',
		'indicaciones',
	),
)); ?>
