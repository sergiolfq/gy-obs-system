<?php
/* @var $this ControlPrenatalController */
/* @var $model ControlPrenatal */

$this->breadcrumbs=array(
	'Control Prenatals'=>array('index'),
	'Manage',
);

if(isset(yii::app()->user->id_emb)){
$emb='update/'.yii::app()->user->id_emb;
$this->menu=array(
	//array('label'=>'List ControlPrenatal', 'url'=>array('index')),
	array('label'=>'Crear Control Prenatal', 'url'=>array('create')),

	array('label'=>'Otros Aspectos Obstétricos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Embarazo', 'url'=>array('embarazo/'.$emb)),
	array('label'=>'Control Postnatal', 'url'=>array('controlPostnatal/create')),
);

}
else{

$this->menu=array(
	//array('label'=>'List ControlPostnatal', 'url'=>array('index')),
	array('label'=>'Otros Aspectos Obstétricos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Embarazo', 'url'=>array('embarazo/admin')),
	array('label'=>'Control Postnatal', 'url'=>array('controlPostnatal/admin')),
);


}






Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#control-prenatal-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Controles Prenatales de la historia actual</h1>
<!--
<p>
Opcionalmente podría usar los operadores de comparación  (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al comienzo de cada valor de búsqueda.
</p> -->


<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'control-prenatal-grid',
	'dataProvider'=>$model->searchDefault(),
//	'filter'=>$model,
	'columns'=>array(
		array('header'=>'fecha inicial embarazo', 'name'=>'embarazo_id_emb','value'=>'$data->embarazoIdEmb->fecha_inicial'),
		'fecha',
		'id_con_pre',
		'fur',
		'eco',
		'ta',
		'p',
		'au',
		
		/*
		'foco',
		'presentacion',
		'ecograma',
		'observaciones',
		'semana',
		'fecha',*/
	
	//	'eco_anexo',
		
		array(
			'class'=>'CButtonColumn',
 		 'template' => '{update}{delete}',
                 'updateButtonUrl' =>'Yii::app()->createUrl("/controlPrenatal/update",array("id" => $data->primaryKey))',
                 'updateButtonImageUrl'=>Yii::app()->request->baseUrl.'/images/consulta.png',
                 'deleteButtonUrl' =>'Yii::app()->createUrl("/controlPrenatal/delete",array("id" => $data->primaryKey))',
                 'deleteButtonImageUrl'=>Yii::app()->request->baseUrl.'/images/delete.png', 
		),
	),
)); ?>
