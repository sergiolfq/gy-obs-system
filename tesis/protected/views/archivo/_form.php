<?php
/* @var $this ArchivoController */
/* @var $model Archivo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'archivo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false, 'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>
<p class="note">Puede subir archivos de ex&aacute;menes en pdf o im&aacute;genes en formatos (PNG,JPG o GIF)</p>
	<p class="note">los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>




	<div class="span-8">
		<?php echo $form->labelEx($model,'nombre',array('title'=>'si ya posee un ecograma  o archivo este se sustituira')); ?>
		<?php echo $form->fileField($model,'nombre',array('size'=>5,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
<div class="span-2">
<?php if($model->nombre!=null){ echo CHtml::link("<img src=".Yii::app()->baseUrl."/images/archivo.png alt='ver ecograma' title='ver archivo' />"

,array('archivo/verArchivo/'.$model->primaryKey),array('target'=>'_blank'));}?>
</div>
	<div class="span-20">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>



	<div class="row span-20 buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
               <?php echo CHtml::button('Volver a Historia', array('submit' => array('historia/update','id'=>yii::app()->user->ultimaHistoria))); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php $id=null; if(isset($_GET['id'])){$id=$_GET['id'];} else $id=null; ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'archivo-grid',
	'dataProvider'=>$model->search($id),
	//'filter'=>$model,
	'columns'=>array(
	//	'id_arch',
		'nombre',
		'descripcion',
		'fecha',
	//	'id_h',
		array(
			'class'=>'CButtonColumn',
                        // 'template'=>'{view}{update}',
			'buttons'=> array('view' => array(
    			'url' => 'array("archivo/verArchivo", "id"=>$data->id_arch)',
    			'label'=>'Ver ecograma o Archivo',
                         'imageUrl'=>yii::app()->request->baseUrl."/images/archivo1.png",
    			'options'=>array("target"=>"_blank"),),)
		),
	),
)); ?>


