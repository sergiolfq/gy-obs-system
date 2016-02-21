<?php
/* @var $this EsquemaMenController */
/* @var $model EsquemaMen */

$this->breadcrumbs=array(
	'Esquema Mens'=>array('index'),
	'Manage',
);

$this->menu=array(
//	array('label'=>'List EsquemaMen', 'url'=>array('index')),
	array('label'=>'Crear Esquema Menstrual', 'url'=>array('create')),

      	array('label'=>'Otros Aspectos Ginecológicos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Examen Físico', 'url'=>array('ExamenFisico/create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#esquema-men-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Esquema Menstrual</h1>


<p>
Opcionalmente podría usar los operadores de comparación  (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada valor de búsqueda.
</p>


<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'esquema-men-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
	/*	'id_esq',
		'id_reg',
		'div1',
		'div2',
		'div3',
		'div4',
		
		'div5',
		'div6',*/
//		'fecha_esq',
	array ('name'=>'fecha_esq','value'=>'$data->idReg->fecha_reg','type'=>'text',),
	//	'obs_esq',
	//	'mes_esq',
		
		array(
			'class'=>'CButtonColumn',
		         'template'=>'{update}{delete}',
                        'updateButtonUrl' =>'Yii::app()->createUrl("/esquemaMen/update",array("id" => $data->id_reg))',
    			'deleteButtonUrl' =>'Yii::app()->createUrl("/esquemaMen/delete",array("id" => $data->id_reg))',
		),
	),
)); ?>
