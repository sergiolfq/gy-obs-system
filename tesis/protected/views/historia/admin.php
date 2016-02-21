<?php
/* @var $this HistoriaController */
/* @var $model Historia */

$this->breadcrumbs=array(
	'Historias'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Historia', 'url'=>array('index')),
	array('label'=>'Create Historia', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#historia-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Historias</h1>


<p>
Opcionalmente mente podría usar los operadores de comparación  (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al comienzo de cada valor de búsqueda.
</p>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'historia-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_his',
		'id_p',
		'id_ant',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
