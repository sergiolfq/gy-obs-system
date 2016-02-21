<?php
/* @var $this ControlPrenatalController */
/* @var $model ControlPrenatal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'control-prenatal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,  'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">

	<div class="span-3">
		<?php echo $form->labelEx($model,'semana'); ?>
		<?php echo $form->textField($model,'semana',array('size'=>10,'maxlength'=>45,'readonly'=>true)); ?>
		<?php echo $form->error($model,'semana'); ?>
	</div>




	
	<div class="span-2">
		<?php echo $form->labelEx($model,'p'); ?>
		<?php echo $form->textField($model,'p',array('size'=>5,'maxlength'=>45,'readonly'=>true)); ?>
		<?php echo $form->error($model,'p'); ?>
	</div>



	<div class="span-2">
		<?php echo $form->labelEx($model,'foco'); ?>
		<?php echo $form->textField($model,'foco',array('size'=>5,'maxlength'=>45,'readonly'=>true)); ?>
		<?php echo $form->error($model,'foco'); ?>
	</div>

	<div class="span-3">
		<?php echo $form->labelEx($model,'presentacion'); ?>
		<?php echo $form->dropDownList($model,'presentacion', $model->opcionesPresentacion(),array('disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'presentacion'); ?>
	</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'au',array('title'=>'Altura Uterina')); ?>
		<?php echo $form->textField($model,'au',array('size'=>5,'maxlength'=>45,'readonly'=>true)); ?>
		<?php echo $form->error($model,'au'); ?>
	</div>

	<div class="span-3">
		<?php echo $form->labelEx($model,'ta',array('title'=>'Tensión Arterial')); ?>
		<?php echo $form->textField($model,'ta',array('size'=>5,'maxlength'=>45,'readonly'=>true)); ?>
		<?php echo $form->error($model,'ta'); ?>
	</div>




	
	



<div class="span-4">
	<?php echo $form->labelEx($model,'fur',array('title'=>'Fecha de última regla')); ?>
	<?php
	if ($model->fur!='') 
	{
	$model->fur=date('Y-m-d',strtotime($model->fur));
	}
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	'model'=>$model,
	'attribute'=>'fur',
	'value'=>$model->fur,
	'language' => 'es',
	'htmlOptions' => array('readonly'=>"readonly"),
	'options'=>array(
	'autoSize'=>true,
	'defaultDate'=>$model->fur,
	'dateFormat'=>'yy-m-d',
	'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
	'buttonImageOnly'=>true,
	'buttonText'=>'fur',
	'selectOtherMonths'=>true,
	'showAnim'=>'slide',
	'showButtonPanel'=>true,
	'showOn'=>'none',
	'yearRange'=>'1930:2024',
	'showOtherMonths'=>true,
	'changeMonth' => 'true',
	'changeYear' => 'true',
	'minDate'=>'1930-01-01', //fecha minima
	'maxDate'=> 'date("Y-m-d")',
	//fecha maxima
	),
	)); ?>
	<?php echo $form->error($model,'fur'); ?>
	</div>

<div class="span-1">
<?php if($model->ecograma!=null){ }//echo CHtml::link("<img src=".Yii::app()->baseUrl."/images/eco.jpeg alt='ver ecograma' title='ver ecograma' />"

//,array('controlPrenatal/verEcograma/'.$model->primaryKey),array('target'=>'_blank'));}?>
</div>

	<div class="span-2">
		<?php echo $form->labelEx($model,'eco'); ?>
		<?php echo $form->dropDownList($model,'eco',$model->opcionesNormal(),array('disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'eco'); ?>
	</div>



<div class="span-8">
		<?php echo $form->labelEx($model,'ecograma',array('title'=>'')); ?>
		<?php echo $form->textArea($model,'ecograma',array('cols'=>'50' ,'rows'=>'1','readonly'=>true) ); ?>
		<?php echo $form->error($model,'ecograma'); ?>
	</div>




	<div class="span-20">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>2,'cols'=>80,'readonly'=>true)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>



	
</div>
	<div class="row span-10 buttons">

	</div>

</div><!-- form -->

<div class="span-18 ">
<?php $id=null; if(isset($_GET['id'])){$id=$_GET['id'];} else $id=null; ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'control-prenatal-grid',
	'dataProvider'=>$model->search($id),
	//'filter'=>$model,
	'columns'=>array(
	//	'id_con_pre',
	        'semana',
		'fecha',
		'fur',
		'eco',
		'ta',
		'p',
		'au',
		'foco',
		'presentacion',
	//	'ecograma',
		'observaciones',
	/*	'embarazo_id_emb',
		'eco_anexo',
		*/
		array(
			'class'=>'CButtonColumn',
   		 'template' => '{update}{delete}',
                 'updateButtonUrl' =>'Yii::app()->createUrl("/controlPrenatal/update",array("id" => $data->primaryKey))',
                 'updateButtonImageUrl'=>Yii::app()->request->baseUrl.'/images/consulta.png',
             //    'deleteButtonUrl' =>'Yii::app()->createUrl("/controlPrenatal/delete",array("id" => $data->primaryKey))',
                 'deleteButtonImageUrl'=>Yii::app()->request->baseUrl.'/images/delete.png', 



		),
	),
)); ?>



<?php $this->endWidget(); ?>
</div>




