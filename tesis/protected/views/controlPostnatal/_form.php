<?php
/* @var $this ControlPostnatalController */
/* @var $model ControlPostnatal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'control-postnatal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
<div class="row">
	
	<div class="span-3">
		<?php echo $form->labelEx($model,'involucion'); ?>
		<?php echo $form->dropDownList($model,'involucion',$model->opcionesNormal()); ?>
		<?php echo $form->error($model,'involucion'); ?>
	</div>

	<div class="span-3">
		<?php echo $form->labelEx($model,'herida_qui'); ?>
		<?php echo $form->dropDownList($model,'herida_qui',$model->opciones()); ?>
		<?php echo $form->error($model,'herida_qui'); ?>
	</div>

	<div class="span-3">
		<?php echo $form->labelEx($model,'epiciotomia'); ?>
		<?php echo $form->dropDownList($model,'epiciotomia',$model->opcionesNormal()); ?>
		<?php echo $form->error($model,'epiciotomia'); ?>
	</div>

	<div class="span-3">
		<?php echo $form->labelEx($model,'sangrado_gen'); ?>
		<?php echo $form->dropDownList($model,'sangrado_gen',$model->opciones()); ?>
		<?php echo $form->error($model,'sangrado_gen'); ?>
	</div>

	<div class="span-5">
		<?php echo $form->labelEx($model,'edema_mien_inf'); ?>
		<?php echo $form->dropDownList($model,'edema_mien_inf',$model->opciones()); ?>
		<?php echo $form->error($model,'edema_mien_inf'); ?>
	</div>
	<div class="span-2">
		<?php echo $form->labelEx($model,'peso'); ?>
		<?php echo $form->textField($model,'peso',array('size'=>4,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'peso'); ?>
	</div>

	<div class="span-3">
		<?php echo $form->labelEx($model,'tension'); ?>
		<?php echo $form->textField($model,'tension',array('size'=>4,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'tension'); ?>
	</div>
	<div class="span-12">
		<?php echo $form->labelEx($model,'anticoceptivo'); ?>
		<?php echo $form->textField($model,'anticoceptivo',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'anticoceptivo'); ?>
	</div>

	<div class="span-20">
		<?php echo $form->labelEx($model,'observaciones_con'); ?>
		<?php echo $form->textArea($model,'observaciones_con',array('rows'=>3,'cols'=>80)); ?>
		<?php echo $form->error($model,'observaciones_con'); ?>
	</div>
</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
                <?php echo CHtml::button('Volver a Historia', array('submit' => array('historia/update','id'=>yii::app()->user->ultimaHistoria))); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php $id=null; if(isset($_GET['id'])){$id=$_GET['id'];} else $id=null; ?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'control-postnatal-grid',
	'dataProvider'=>$model->search($id),
	//'filter'=>$model,
	'columns'=>array(
	//	'id_cont_post',
	//	'id_emb',
                'fecha_con_pos',
		'peso',
		'tension',
		'involucion',
		'herida_qui',
		'epiciotomia',
		'sangrado_gen',
		'edema_mien_inf',
		'anticoceptivo',
		'observaciones_con',
		
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
