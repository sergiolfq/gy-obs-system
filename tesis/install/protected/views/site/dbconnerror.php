<div class="welcome">
    <h2>Error estableciendo configuración de base de datos</h2>

    <p class="errorMessage"><?php echo $error; ?></p>
    
    <?php echo CHtml::link('Por favor, intente de nuevo', array('setupconfig'), array('class' => 'btn btn-primary btn-lg btn-block')); ?>
</div>
