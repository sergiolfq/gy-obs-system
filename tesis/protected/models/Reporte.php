<?php 
 class Reporte {

public function familiares(){
 $consulta=Yii::app()->db->createCommand('SELECT SUM( `alergia` ) AS `alergia` , SUM( `artritis` ) AS `artritis` , SUM( `asma` ) AS `asma` , SUM( `cancer` ) 		AS `cancer` , SUM( `cardiovasculares` ) AS `cardiovasculares` , SUM( `diabetes` ) AS `diabetes` , SUM( `enfermedades_digestivas` ) AS 			       `enfermedades_digestivas` , SUM( `enfermedades_renales` ) AS `enfermedades_renales` , SUM( `intoxicacion` ) AS `intoxicacion` , SUM( `neuromentales` ) AS `neuromentales` , SUM( `sifilis` ) AS `sifilis` , SUM( `tbc` ) AS `tbc` , SUM( `tifoidea` ) AS `tifoidea` , SUM( `tosferina` ) AS `tosferina` , SUM( `traumatismo` ) AS `traumatismo` , SUM( `vacunaciones` ) AS `vacunaciones` , SUM( `otros` ) AS `otros`
FROM ant_familiares   ')->queryAll(); //devuelve l meses

return $consulta;
}

public function personales(){
$consulta=Yii::app()->db->createCommand(' SELECT SUM( IF( `abenitis` =1, 1, 0 ) ) AS `adenitis`, SUM( IF( `alergia` =1, 1, 0 ) ) AS `alergias` ,
SUM(IF( `amigdalitis`=1, 1, 0 ) ) AS `amigdalitis`, SUM(`artritis`) as `artritis`,SUM(`asma`) as `asma`,SUM(`blenorragia`) as `blenorragia`,SUM(`buba`) as `buba`,SUM(`catarros`) as `catarros` , SUM(`chagas`) as `chagas`, SUM(`chancros`) as`chancros` , SUM(`difteria`) as `difteria`, SUM(`diarreas`) as `diarreas` , SUM(`hansen`) as `hansen`, SUM(`influenza`) as `influenza` , SUM(`lechina`) as `lechina` , SUM(`necatoriasis`) as `necatoriasis` , SUM(`neumonia`) as `neumonia`, SUM(`otitis`) as `otitis` , SUM(`paludismo`) as `paludismo` , SUM(`parasitos`) as `parasitos`, SUM(`parotitis`) as `parotitis` , SUM(`pleuresia`) as `pleuresia` , SUM(`quirurgicos`) as `quirurgicos` , SUM(`rinofaringitis`) as `rinofaringitis` , SUM(`rubeola`) as `rubeola`, SUM(`sarampion`) as `sarampion` , SUM(`sifilis`) as `sifilis` , SUM(`tbc`) as `tbc` , SUM(`tifoidea`) as `tifoidea` , SUM(`tosferina`) as `tosferina` , SUM(`traumatismo`) as `traumatismo`, SUM(`vacunaciones`) as `vacunaciones`, SUM(`otros`) as `otros` from ant_personales    ')->queryAll(); //devuelve l meses

 return $consulta;

}

public function habitos(){
$consulta=Yii::app()->db->createCommand('SELECT SUM( `alcohol` ) AS `alcohol` , SUM( `chimo` ) AS `chimo` , SUM( `deportes` ) AS `deportes` , SUM( `drogas` ) AS `drogas` , SUM( `ocupacion` ) AS `ocupacion` , SUM( `problemas_familiares` ) AS `problemas_familiares` , SUM( `rasgos_personales` ) AS `rasgos_personales` , SUM( `siesta` ) AS `siesta` , SUM( `otros` ) AS `otros`
FROM hab_psicobio  ')->queryAll(); //devuelve l meses

return $consulta;
}




  public function consultaAnual($anyo,$usuario){
    
   if($usuario!=-1)
   $condicion=' AND id_u=:usuario';
   else 
   $condicion='';

   $query=Yii::app()->db->createCommand('SELECT DISTINCT month( fecha_con )  AS m FROM consulta WHERE year( fecha_con ) =:anyo'.$condicion); //devuelve l meses
   $query->bindParam(":anyo",$anyo,PDO::PARAM_STR);
   if($usuario!=-1)
   $query->bindParam(":usuario",$usuario,PDO::PARAM_INT);
   $meses=$query->queryAll();
   $query=Yii::app()->db->createCommand('SELECT count( * ) as m FROM `consulta`WHERE year( fecha_con ) =:anyo'.$condicion.' GROUP BY month( fecha_con )LIMIT 0 , 30'); //devuelve
   $query->bindParam(":anyo",$anyo,PDO::PARAM_STR);
   if($usuario!=-1)
   $query->bindParam(":usuario",$usuario,PDO::PARAM_INT);
   $cantidades=$query->queryAll();

      return array('meses'=>$meses,'cantidades'=>$cantidades);
     }


    public function controlPrenatal($anyo,$usuario){

    if($usuario!=-1)
    $condicion=" AND id_u=:usuario ";
    else 
    $condicion='';      


     $query=Yii::app()->db->createCommand("SELECT DISTINCT month( fecha_bit )  AS m FROM bitacora WHERE year( fecha_bit ) =:anyo AND  trim( descripcion_bit ) = 'se creo control prenatal'".$condicion); //devuelve l meses
     $query->bindParam(":anyo",$anyo,PDO::PARAM_STR);
     if($usuario!=-1)
     $query->bindParam(":usuario",$usuario,PDO::PARAM_INT);
     $meses=$query->queryAll();
     $query=Yii::app()->db->createCommand("SELECT count( * ) as m FROM bitacora WHERE year( fecha_bit ) =:anyo AND  trim( descripcion_bit ) = 'se creo control prenatal' ".$condicion.' GROUP BY month( fecha_bit ) '); //devuelve 
     $query->bindParam(":anyo",$anyo,PDO::PARAM_STR);
     if($usuario!=-1)
     $query->bindParam(":usuario",$usuario,PDO::PARAM_INT);
     $cantidades=$query->queryAll();
      return array('meses'=>$meses,'cantidades'=>$cantidades);   
    }

    public function controlPostnatal($anyo,$usuario){

    if($usuario!=-1)
    $condicion=" AND id_u=:usuario ";
    else 
    $condicion='';   

    $query=Yii::app()->db->createCommand("SELECT DISTINCT month( fecha_bit )  AS m FROM bitacora WHERE year( fecha_bit ) = :anyo AND trim( descripcion_bit ) = 'se creo control postnatal' ".$condicion);
    $query->bindParam(":anyo",$anyo,PDO::PARAM_STR);
    if($usuario!=-1)
    $query->bindParam(":usuario",$usuario,PDO::PARAM_INT);
    $meses=$query->queryAll(); //devuelve l meses
    $query=Yii::app()->db->createCommand("SELECT count( * ) as m FROM bitacora WHERE year( fecha_bit ) = :anyo AND trim( descripcion_bit ) = 'se creo control postnatal'".$condicion.'  GROUP BY month( fecha_bit ) '); //devuelve 
    $query->bindParam(":anyo",$anyo,PDO::PARAM_STR);
    if($usuario!=-1)
    $query->bindParam(":usuario",$usuario,PDO::PARAM_INT);
    $cantidades=$query->queryAll(); //devuelve las cantidades

       return array('meses'=>$meses,'cantidades'=>$cantidades);   
    }

	public function examen($anyo,$usuario){

    	if($usuario!=-1)
        $condicion=" AND id_u=:usuario ";
    	else 
    	$condicion='';   

 	$query=Yii::app()->db->createCommand("SELECT DISTINCT month( fecha_bit )  AS m FROM bitacora WHERE year( fecha_bit ) = :anyo  AND trim( descripcion_bit ) = 'se creo examen fisico' ".$condicion.""); //devuelve l meses
        $query->bindParam(":anyo",$anyo,PDO::PARAM_STR);
	 if($usuario!=-1)
    	$query->bindParam(":usuario",$usuario,PDO::PARAM_INT);
 	$meses=$query->queryAll(); //devuelve l meses
        $query=Yii::app()->db->createCommand("SELECT count( * ) as m FROM bitacora WHERE year( fecha_bit ) =:anyo AND trim( descripcion_bit ) = 'se creo examen fisico' ".$condicion.' GROUP BY month( fecha_bit ) '); //devuelve 
        $query->bindParam(":anyo",$anyo,PDO::PARAM_STR);
 	if($usuario!=-1)
    	$query->bindParam(":usuario",$usuario,PDO::PARAM_INT);
 	$cantidades=$query->queryAll(); //devuelve l meses
       return array('meses'=>$meses,'cantidades'=>$cantidades);   
         }


}
