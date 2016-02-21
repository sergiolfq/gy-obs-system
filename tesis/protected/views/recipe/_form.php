<?php
/* @var $this RecipeController */
/* @var $model Recipe */
/* @var $form CActiveForm */
?>


<script type="text/javascript">

var alert_title='Input Restriction';

function limitTextarea(el,maxLines,maxChar){
if(!el.x){
el.x=uniqueInt();
el.onblur=function(){clearInterval(window['int'+el.x])}
}
window['int'+el.x]=setInterval(function(){
var lines=el.value.replace(/\r/g,'').split('\n'),
i=lines.length,
lines_removed,
char_removed;
if(maxLines&&i>maxLines){
alert('No puedes escribir mas \nde '+maxLines+' lineas');
lines=lines.slice(0,maxLines);
lines_removed=1
}
if(maxChar){
i=lines.length;
while(i-->0)if(lines[i].length>maxChar){
lines[i]=lines[i].slice(0,maxChar);
char_removed=1
}
if(char_removed)alert('No puedes escribir mas\nde '+maxChar+' caracteres por linea')
}
if(char_removed||lines_removed)el.value=lines.join('\n')
},50);
}

function uniqueInt(){
var num,maxNum=100000;
if(!uniqueInt.a||maxNum<=uniqueInt.a.length)uniqueInt.a=[];
do num=Math.ceil(Math.random()*maxNum);
while(uniqueInt.a.hasMember(num))
uniqueInt.a[uniqueInt.a.length]=num;
return num
}

Array.prototype.hasMember=function(testItem){
var i=this.length;
while(i-->0)if(testItem==this[i])return 1;
return 0
};

function set_ie_alert(){
window.alert=function(msg_str){
vb_alert(msg_str)
}
}

</script>
<script language="vbscript" type="text/vbs">

set_ie_alert()

Function vb_alert(msg_str)
MsgBox msg_str,vbOKOnly+vbInformation+vbApplicationModal,alert_title
End Function

</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'recipe-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

       <?php if(isset($model->id_rec)){ echo'<label class="span-0">De no abrirse autom&aacuteticamente el r&eacutecipe haga click para</label>';  echo CHtml::link("Ver r&eacutecipe",array("recipe/ver/".$model->id_rec),array('target'=>'_blank'));}?>

	<div class="row">
		<?php echo $form->labelEx($model,'tratamiento'); ?>
		<?php echo $form->textArea($model,'tratamiento',array('cols'=>70,'rows'=>3,'onfocus'=>"limitTextarea(this,10,50)",'wrap'=>"off")); ?>
		<?php echo $form->error($model,'tratamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'indicaciones'); ?>
		<?php echo $form->textArea($model,'indicaciones',array('cols'=>70,'rows'=>3,'rows'=>3,'onfocus'=>"limitTextarea(this,10,50)",'wrap'=>"off")); ?>
		<?php echo $form->error($model,'indicaciones'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
              <?php echo CHtml::button('Volver a Historia', array('submit' => array('historia/update','id'=>yii::app()->user->ultimaHistoria))); ?>
	</div>
        
<?php $this->endWidget(); ?>

</div><!-- form -->
<?php $id=null; if(isset($_GET['id'])){$id=$_GET['id'];} else $id=null; ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'recipe-grid',
	'dataProvider'=>$model->search($id),
//	'filter'=>$model,
	'columns'=>array(
		/*'id_rec',
		'id_his',
		'tratamiento',
		'indicaciones',*/
                 'fecha_rec',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{view}{update}{delete}',
			'buttons'=> array('view' => array(
    			'url' => 'array("recipe/ver", "id"=>$data->id_rec)',
    			'label'=>'Ver Recipe',
                         'imageUrl'=>yii::app()->request->baseUrl."/images/recipe.png",
    			'options'=>array("target"=>"_blank"),),
)		 
		),
	),
)); ?>



