<p>
   Entre los datos de configuración de su base de datos.
</p>

<div class="setup-config">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'setup-config-form',
        'enableClientValidation' => false,
        'htmlOptions' => array(
            'class' => 'form-horizontal',
            'role' => 'form'
        ),
    ));
    ?>

    <div class="form-group">
        <?php // echo $form->labelEx($model, 'sitename', array('class' => 'col-sm-3 control-label')); ?>
        <div class="col-sm-4">
            <?php //echo $form->textField($model, 'sitename', array('class'=>'form-control', 'placeholder'=>'name')); ?>
            <?php //echo $form->error($model, 'sitename'); ?>
        </div>
    <!--    <div class="col-sm-5">
            <span class="help-block">Name of the site you want to use</span>
        </div> -->
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'dbname', array('class' => 'col-sm-3 control-label')); ?>
        <div class="col-sm-4">
            <?php echo $form->textField($model, 'dbname', array('class'=>'form-control', 'placeholder'=>'nombre de BD')); ?>
            <?php echo $form->error($model, 'dbname'); ?>
        </div>
        <div class="col-sm-5">
            <span class="help-block">Nombre de la base de datos</span>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'dbuser', array('class' => 'col-sm-3 control-label')); ?>
        <div class="col-sm-4">
            <?php echo $form->textField($model, 'dbuser', array('class'=>'form-control', 'placeholder'=>'username')); ?>
            <?php echo $form->error($model, 'dbuser'); ?>
        </div>
        <div class="col-sm-5">
            <span class="help-block">MySQL username</span>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'dbpassword', array('class' => 'col-sm-3 control-label')); ?>
        <div class="col-sm-4">
            <?php echo $form->passwordField($model, 'dbpassword', array('class'=>'form-control', 'placeholder'=>'password')); ?>
            <?php echo $form->error($model, 'dbpassword'); ?>
        </div>
        <div class="col-sm-5">
            <span class="help-block">MySQL password</span>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'dbhost', array('class' => 'col-sm-3 control-label')); ?>
        <div class="col-sm-4">
            <?php echo $form->textField($model, 'dbhost', array('class'=>'form-control', 'placeholder'=>'localhost')); ?>
            <?php echo $form->error($model, 'dbhost'); ?>
        </div>
        <div class="col-sm-5">
            <span class="help-block">Consulte su proveedor de hosting si localhost no existe.</span>
        </div>
    </div>

   <div class="form-group">
        <?php echo $form->labelEx($model, 'titulo', array('class' => 'col-sm-3 control-label')); ?>
        <div class="col-sm-4">
            <?php echo $form->textArea($model, 'titulo', array('class'=>'form-control','rows'=>'4','cols'=>'80', 'placeholder'=>'ejemplo. Clinica XXXXXXX')); ?>
            <?php echo $form->error($model, 'titulo'); ?>
        </div>
        <div class="col-sm-5">
            <span class="help-block">Agregue datos como nombre completo, direccion y RIF .</span>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-4">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div>
