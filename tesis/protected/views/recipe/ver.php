<?php 
     $informacion=$model->informacion();
  //   var_dump($informacion);
  //  
     $webroot = Yii::getPathOfAlias('webroot');
     $pdf = new Pdf('L');
     $pdf->mostrarRecipe($informacion['infoMedico'],$informacion['infoPaciente'],$model->tratamiento." ",$model->indicaciones."",$informacion['infoCentro']);
     $pdf->output();
     yii::app()->end();



    // $pdf->Output($webroot.'/images/archivo','F');

   /*  $pdf->mostrarConstancia();
     $pdf->Output($webroot.'/images/archivo.pdf','F');
     header('Content-type: application/pdf');
     readfile($webroot.'/images/archivo.pdf');*/  
     //$pdf->output();
    

?> 
