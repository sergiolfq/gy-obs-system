<?php
/* @var $this ArchivoController */
/* @var $model Archivo */

$this->breadcrumbs=array(
	'Archivos'=>array('index'),
	'Manage',
);

$this->menu=array(
//	array('label'=>'List Archivo', 'url'=>array('index')),
	array('label'=>'Crear registro de Ecogramas o Archivo', 'url'=>array('create')),
  	array('label'=>'Otras opciones','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Crear Recipe', 'url'=>array('recipe/create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#archivo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Archivos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'archivo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
	//	'id_arch',
		'nombre',
		'descripcion',
		'fecha',
		'id_h',
		array(
			'class'=>'CButtonColumn',
			'buttons'=> array('view' => array(
    			'url' => 'array("archivo/verArchivo", "id"=>$data->id_arch)',
    			'label'=>'Ver Recipe',
                         'imageUrl'=>yii::app()->request->baseUrl."/images/recipe.png",
    			'options'=>array("target"=>"_blank"),),)
		),
	),
)); ?>
