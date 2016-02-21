<?php
/* @var $this ExamenFisicoController */
/* @var $model ExamenFisico */

$this->breadcrumbs=array(
	'Examen Fisicos'=>array('index'),
	'Manage',
);

$this->menu=array(
//	array('label'=>'Listar Examen Fisico', 'url'=>array('index')),
	array('label'=>'Crear Examen Fisico', 'url'=>array('create')),
      	array('label'=>'Otros Aspectos Ginecológicos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Esquema menstrual', 'url'=>array('EsquemaMen/create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#examen-fisico-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
 
<h1>Exámenes Físicos</h1>


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
	'id'=>'examen-fisico-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
	//	'id_exa',
		'fecha',
	/*	'id_genitales_externos',
		'id_cuello_uterino',
		'id_mat',
		'id_an',
		
		'id_par',
		'id_his',
		*/
		array(
		'class' => 'CButtonColumn',
           'template' => '{update}{delete}',
                 'updateButtonUrl' =>'Yii::app()->createUrl("/examenFisico/update",array("id" => $data->primaryKey))',
                 'updateButtonImageUrl'=>Yii::app()->request->baseUrl.'/images/consulta.png',
                 'deleteButtonUrl' =>'Yii::app()->createUrl("/examenFisico/delete",array("id" => $data->primaryKey))',
                 'deleteButtonImageUrl'=>Yii::app()->request->baseUrl.'/images/delete.png', 
        ),
	),
)); ?>
