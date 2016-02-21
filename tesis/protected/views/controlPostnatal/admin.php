<?php
/* @var $this ControlPostnatalController */
/* @var $model ControlPostnatal */

$this->breadcrumbs=array(
	'Control Postnatals'=>array('index'),
	'Manage',
);


if(isset(yii::app()->user->id_emb))
{$emb='update/'.yii::app()->user->id_emb;
 
$this->menu=array(
	//array('label'=>'List ControlPostnatal', 'url'=>array('index')),
	array('label'=>'Crear Control Postnatal', 'url'=>array('create')),

array('label'=>'Otros Aspectos Obstétricos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Embarazo', 'url'=>array('embarazo/'.$emb)),
	array('label'=>'Control Prenatal', 'url'=>array('controlPrenatal/create')),
);


}else 
{

$this->menu=array(
	//array('label'=>'List ControlPostnatal', 'url'=>array('index')),
	array('label'=>'Otros Aspectos Obstétricos ','itemOptions'=>array('style'=>'background-color:#B2D1F0;font-weight:bold;color:#0066CC;'),),
	array('label'=>'Embarazo', 'url'=>array('embarazo/create')),
	array('label'=>'Control Prenatal', 'url'=>array('controlPrenatal/admin')),
);


}



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#control-postnatal-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Controles Postnatales de la historia</h1>
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
	'id'=>'control-postnatal-grid',
	'dataProvider'=>$model->searchDefault(),
	//'filter'=>$model,
	'columns'=>array(
		//'id_emb',
		array('header'=>'fecha inicial embarazo', 'name'=>'id_emb','value'=>'$data->idEmb->fecha_inicial'),
		'fecha_con_pos',
		'peso',
		'tension',
		'involucion',
		'herida_qui',
		/*
		'epiciotomia',
		'sangrado_gen',
		'edema_mien_inf',
		'anticoceptivo',
		'observaciones_con',
		*/
		array(
			'class'=>'CButtonColumn',
		 'template' => '{update}{delete}',
                 'updateButtonUrl' =>'Yii::app()->createUrl("/controlPostnatal/update",array("id" => $data->primaryKey))',
                 'updateButtonImageUrl'=>Yii::app()->request->baseUrl.'/images/consulta.png',
                 'deleteButtonUrl' =>'Yii::app()->createUrl("/controlPostnatal/delete",array("id" => $data->primaryKey))',
                 'deleteButtonImageUrl'=>Yii::app()->request->baseUrl.'/images/delete.png', 


		),
	),
)); ?>
