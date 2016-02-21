<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />
	<meta charset='utf-8'>
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
		<meta charset="UTF-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<?php                  // codigo que activa los mensajes 
Yii::app()->clientScript->registerScript(
   'myHideEffect',
   '$(".info").animate({opacity: 1.0}, 3000).fadeOut("slow");',
   CClientScript::POS_READY
);
?>

<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class=" info flash-' . $key . '">' . $message . "</div>\n";
    }
?>
<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
               <?php (isset(yii::app()->user->ultimaHistoria))?$historia=yii::app()->user->ultimaHistoria:$historia=null ?>
   	       <?php (isset(yii::app()->user->id_u))?$cuenta=yii::app()->user->id_u:$cuenta=null ?>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
			//	array('label'=>'Inicio', 'url'=>array('/site/index')),
			//	array('label'=>'acerca de', 'url'=>array('/site/page', 'view'=>'about')),
			//	array('label'=>'Contacto', 'url'=>array('/site/contact')),
				array('label'=>'Entrar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Mi Cuenta', 'url'=>array('/usuario/update/'.$cuenta), 'visible'=>$cuenta!=null),
				array('label'=>'Consultar una Historia', 'url'=>array('/persona/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Historia actual', 'url'=>array('/historia/update/'.$historia), 'visible'=>$historia!=null),
				array('label'=>'Administrar Usuarios', 'url'=>array('/usuario/admin'), 'visible'=>Yii::app()->user->name=="super"),
				array('label'=>'Reportes', 'url'=>array('/reporte/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->


	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
	<?php  echo "Copyright ".date('Y').' todos los derechos reservados.' ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
