<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<div class="welcome">
    <h1>Bienvenido!</h1>
    
    <?php echo CHtml::link('Siguiente', array('setupconfig'), array('class' => 'btn btn-primary btn-lg btn-block')); ?>
</div>
