<?php
/* @var $this EmbarazoController */
/* @var $model Embarazo */

$this->breadcrumbs=array(
	'Embarazos'=>array('index'),
	'Manage',
);

$this->menu=array(
//	array('label'=>'List Embarazo', 'url'=>array('index')),
//	array('label'=>'Crear Embarazo', 'url'=>array('create')),

      	array('label'=>'Otros Aspectos Obstétricos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Control Prenatal', 'url'=>array('controlPrenatal/create')),
	array('label'=>'Control Postnatal', 'url'=>array('controlPostnatal/create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#embarazo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar  Embarazos</h1>


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
	'id'=>'embarazo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
	//	'id_emb',
		'fecha_inicial',
		'peso_anterior',
		'sexo',
		'fum',
		'exam_cli_hom',
	/*	'examen_mama',
		
		'examen_odo',
		'pelvis',
		'papanicolau',
		'colposcopia',
		'examen_clini_cervix',
		'vdrl',
		'fecha_vdrl',
		'hb',
		'fecha_hb',
		'observaciones',
		'tipo_parto',
		'hora',
		'fecha_final',
		'muerte_fetal',
	
		'peso',
		'vdrl_em',
		'talla_final',*/
	
		/*'historia_id_his',
		'estado',
		*/
		array(
			'class'=>'CButtonColumn',
                 'template' => '{update}',
                 'updateButtonUrl' =>'Yii::app()->createUrl("/embarazo/update",array("id" => $data->primaryKey))',
                 'updateButtonImageUrl'=>Yii::app()->request->baseUrl.'/images/consulta.png',
                 'deleteButtonUrl' =>'Yii::app()->createUrl("/embarazo/delete",array("id" => $data->primaryKey))',
                 'deleteButtonImageUrl'=>Yii::app()->request->baseUrl.'/images/delete.png', 
		),
	),
)); ?>
