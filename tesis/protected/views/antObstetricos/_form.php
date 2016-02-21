<?php
/* @var $this AntObstetricosController */
/* @var $a AntObstetricos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ant-obstetricos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary(array($a,$b)); ?>

	<div class="span-3">
		<?php //echo $form->labelEx($a,'id_ant_obs'); ?>
		<?php //echo $form->textField($a,'id_ant_obs'); ?>
		<?php //echo $form->error($a,'id_ant_obs'); ?>
	</div>

	<div class="span-3">
		<?php echo $form->labelEx($a,'anyo'); ?>
		<?php echo $form->textField($a,'anyo',array('size'=>6)); ?>
		<?php echo $form->error($a,'anyo'); ?>
	</div>

	<div class="span-3">
		<?php echo $form->labelEx($a,'vivo'); ?>
		<?php echo $form->dropDownList($a,'vivo',$a->vivo()); ?>
		<?php echo $form->error($a,'vivo'); ?>
	</div>

	<div class="span-3">
       <?php  //echo $form->listData($options, 'sexo', 'descripcion'); ?>
	</div>

	<div class="span-3">
		<?php echo $form->labelEx($a,'sexo'); ?>
		<?php echo $form->dropDownList($a,'sexo',$a->sexo()); ?>
		<?php echo $form->error($a,'sexo'); ?>
	</div>

	<div class="span-3">
		<?php echo $form->labelEx($a,'tipo_parto'); ?>
		<?php echo $form->dropDownList($a,'tipo_parto',$a->parto()); ?>
		<?php echo $form->error($a,'tipo_parto'); ?>
	</div>

	<div class="span-3">
		<?php echo $form->labelEx($a,'tiempo_trabajo'); ?>
		<?php echo $form->textField($a,'tiempo_trabajo',array('size'=>6)); ?>
		<?php echo $form->error($a,'tiempo_trabajo'); ?>
	</div>

	<div class="span-3">
		<?php echo $form->labelEx($a,'peso_nino'); ?>
		<?php echo $form->textField($a,'peso_nino',array('size'=>6)); ?>
		<?php echo $form->error($a,'peso_nino'); ?>
	</div>

	<div class="span-3">
		<?php echo $form->labelEx($a,'hemorragia'); ?>
		<?php echo $form->dropDownList($a,'hemorragia',$a->vivo()); ?>
		<?php echo $form->error($a,'hemorragia'); ?>
	</div>

	<div class="span-3">
		<?php echo $form->labelEx($a,'lesion_perinial'); ?>
		<?php echo $form->dropDownList($a,'lesion_perinial',$a->vivo()); ?>
		<?php echo $form->error($a,'lesion_perinial'); ?>
	</div>

	<div class="span-3">
		<?php echo $form->labelEx($a,'toxemia'); ?>
		<?php echo $form->dropDownList($a,'toxemia',$a->vivo()); ?>
		<?php echo $form->error($a,'toxemia'); ?>
	</div>

	<div class="span-5">
		<?php echo $form->labelEx($a,'puerperio'); ?>
		<?php echo $form->dropDownList($a,'puerperio',$a->vivo()); ?>
		<?php echo $form->error($a,'puerperio'); ?>
	</div>



	<div class="span-20 ">
	       <?php echo CHtml::submitButton($a->isNewRecord ? 'Crear' : 'Guardar'); ?>
               <?php //echo CHtml::button('Submit',array('onclick'=>'submit()')); ?>
               <?php echo CHtml::button('Volver a Historia', array('submit' => array('historia/update','id'=>yii::app()->user->ultimaHistoria))); ?>
	</div>





</div><!-- form --><br />

<?php $id=null; if(isset($_GET['id'])){$id=$_GET['id'];} else $id=null; ?>

<div id="search">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ant-obstetricos-grid',
	'dataProvider'=>$b->search($id),
	//'filter'=>$b,
	'columns'=>array(
		//'id_ant_obs',
		'anyo',
		'tipo_parto',
		'tiempo_trabajo',
		'hemorragia',
		'lesion_perinial',
		
		'toxemia',
		'puerperio',
		'peso_nino',
		'vivo',
		'sexo',
		//'id_ant',
		
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{update}{delete}',
		),
	),
)); ?>
</div>
<?php $this->endWidget(); ?>


