<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'form-id',
        'action' => Yii::app()->createUrl($accion),  //<- your form action here
      
)); ?>

<h1> Elija el año que desea consultar<h1>
<?php //echo  CHTML::textField('anyo'); ?>
<?php  $years = array_combine(range(date("Y"), 1910), range(date("Y"), 1910));  ?>
<?php echo CHTML::dropDownList('anyo','anyo', $years) ?>

<?php echo '<br>'.$lista.'</br>';  ?>

<?php echo CHtml::submitButton( 'Generar'); ?>
<?php $this->endWidget();?>
