<?php
/* @var $this RecipeController */
/* @var $model Recipe */

$this->breadcrumbs=array(
	'Recipes'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'Listar Recipe', 'url'=>array('index')),
	array('label'=>'Crear Recipe', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#recipe-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Recipes</h1>

<p>
Opcionalmente mente podría usar los operadores de comparación  (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al comienzo de cada valor de búsqueda.
</p>


<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'recipe-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/*'id_rec',
		'id_his',
		'tratamiento',
		'indicaciones',*/
                 'fecha_rec',
		array(
			'class'=>'CButtonColumn',
			'buttons'=> array('view' => array(
    			'url' => 'array("recipe/ver", "id"=>$data->id_rec)',
    			'label'=>'Ver Recipe',
                         'imageUrl'=>yii::app()->request->baseUrl."/images/recipe.png",
    			'options'=>array("target"=>"_blank"),),
)		 
		),
	),
)); ?>
