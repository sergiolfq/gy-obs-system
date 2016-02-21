<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Persona', 'url'=>array('index')),
	array('label'=>'Crear Historia', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#persona-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Consultar Historias</h1>

<p>
Opcionalmente podría usar los operadores de comparación  (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada valor de búsqueda.
</p>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
));  ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'persona-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id_p',
		'nombre',
		'apellido',
	//	'domicilio',  campos que no van 
	//	'fecha_nac',
	//	'id_es',
		
	//	'id_gru',
		'cedula',
/*		'telefono',  campos que no van 
		'tlf_eme',
		'correo',
		*/                      
/*		array(       se modifico esta clase para que dejara personalizarla 
			'class'=>'CButtonColumn',
		),*/
             array(
		'class' => 'CButtonColumn',
	           'template' => '{update}',
		 'updateButtonLabel' =>'consultar',
                 'updateButtonUrl' =>'Yii::app()->createUrl("/persona/update/",array("id" => $data->id_p))',
                 'updateButtonImageUrl'=>Yii::app()->request->baseUrl.'/images/update.png',
             //    'deleteButtonUrl' =>'Yii::app()->createUrl("/persona/delete",array("id" => $data->primaryKey))',
             //    'deleteButtonImageUrl'=>Yii::app()->request->baseUrl.'/images/delete.png',
                 ),
	),
)); ?>
