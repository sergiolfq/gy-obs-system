<?php

class ReporteController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}



	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','reporteA','consultaForm','reporteControlPrenatalForm','reporteControlPrenatal'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('reporteExamForm','reporteExam','reportePostnatalForm','reporteControlPostnatal'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('reporteFamiliares' ,'reporteHabitos','reportePersonal','admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
// Reporte de consulta anual 
	public function actionReporteA(){
	//if(!isset($_POST['anyo'])|| isset($_GET['anyo']))
	//  throw new CHttpException(404,'elija un reporte y un anyo.');
         $usuario='-1';
	 if(isset($_POST['usuario']))
           $usuario=$_POST['usuario'];
          
	 elseif(isset($_GET['usuario'])) 
          $usuario=$_GET['usuario'];

	 if(isset($_POST['anyo']))
          $anyo=$_POST['anyo'];
	            
	 elseif(isset($_GET['anyo'])) 
           $anyo=$_GET['anyo'];
          	  
         else 
	throw new CHttpException(404,'elija un reporte y un anyo.');
//	   var_dump($anyo);
//           yii::app()->end();

          $opciones=array(0,0,0,0,0,0,0,0,0,0,0,0);  //representa los doce meses 
          
	  $reporte= new Reporte;
          $resultado=$reporte->consultaAnual($anyo,$usuario);
          $meses=$resultado['meses'];
          $cantidades=$resultado['cantidades'];
    
	  $mes=array();
          $cantidad=array();
        


	  foreach($meses as $item){
    		//process each item here
    		$mes[]=$item['m'];
                 }

          $cantidad=array();
	  foreach($cantidades as $item){
    		//process each item here
    		$cantidad[]=$item['m'];
                 }
                  	 

        for($i=0;$i<count($mes);$i++){     
             $num=$mes[$i]-1;
             $valor=$cantidad[$i];
             $opciones[$num]=intval($valor);
             }
	if($usuario==-1)
        $titulo='Consultas del año '.$anyo;
        else {
        $prof= Usuario::model()->findByPk($usuario);
        
        $titulo='Consultas del año '.$anyo.' por el Usuario '.$prof->nombre.' '.$prof->apellido.' CI '.$prof->ci;
        }
        $tituloy='número de casos atendidos';
          
	$mesesAnyo=array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
	if(isset($_GET['excel'])){
	$content=$this->renderPartial("excel",array('categorias'=>$mesesAnyo,'resultados'=>$opciones,'titulo'=>$titulo),true);        
	yii::app()->request->sendFile('test.xls',$content);         
	}

         $this->render('reporte',array('anual'=>$opciones, 'titulo'=>$titulo , 'tituloy'=> $tituloy));
         }






public function actionReporteControlPrenatal(){
         $usuario='-1';
	 if(isset($_POST['usuario']))
           $usuario=$_POST['usuario'];
          
	 elseif(isset($_GET['usuario'])) 
          $usuario=$_GET['usuario'];

          if(isset($_POST['anyo']))
          $anyo=$_POST['anyo'];
	 elseif(isset($_GET['anyo'])) 
           $anyo=$_GET['anyo'];
         else 
	throw new CHttpException(404,'elija un reporte y un anyo.');


          $opciones=array(0,0,0,0,0,0,0,0,0,0,0,0);  //representa los doce meses 
        
          $reporte= new Reporte;
          $resultado=$reporte->controlPrenatal($anyo,$usuario);
          $meses=$resultado['meses'];
          $cantidades=$resultado['cantidades'];


	  $mes=array();
          $cantidad=array();
                	 
	  foreach($meses as $item){
    		//process each item here
    		$mes[]=$item['m'];
                 }

          $cantidad=array();
	  foreach($cantidades as $item){
    		//process each item here
    		$cantidad[]=$item['m'];
                 }
         
        for($i=0;$i<count($mes);$i++){     
             $num=$mes[$i]-1;
             $valor=$cantidad[$i];
             $opciones[$num]=intval($valor);
             }

	 if($usuario==-1)
        $titulo='Consultas de control prenatal del '.$anyo;
        else {
        $prof= Usuario::model()->findByPk($usuario);
        
        $titulo='Consultas de control prenatal del '.$anyo.' por el Usuario '.$prof->name.' '.$prof->apellido.' CI '.$prof->ci;
        }

        $tituloy='número de casos atendidos';
          
	$mesesAnyo=array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
	if(isset($_GET['excel'])){
	$content=$this->renderPartial("excel",array('categorias'=>$mesesAnyo,'resultados'=>$opciones,'titulo'=>$titulo),true);        
	yii::app()->request->sendFile('test.xls',$content);         
	}

         $this->render('reporte',array('anual'=>$opciones, 'titulo'=>$titulo , 'tituloy'=> $tituloy));
         }


public function actionReporteControlPostnatal(){
    
         $usuario='-1';
	 if(isset($_POST['usuario']))
           $usuario=$_POST['usuario'];
          
	 elseif(isset($_GET['usuario'])) 
          $usuario=$_GET['usuario'];	  

	 if(isset($_POST['anyo']))
          $anyo=$_POST['anyo'];
	 elseif(isset($_GET['anyo'])) 
           $anyo=$_GET['anyo'];
         else 
	throw new CHttpException(404,'elija un reporte y un anyo.');

          $opciones=array(0,0,0,0,0,0,0,0,0,0,0,0);  //representa los doce meses 
        
	  $reporte= new Reporte;
          $resultado=$reporte->controlPostnatal($anyo,$usuario);
          $meses=$resultado['meses'];
          $cantidades=$resultado['cantidades'];

	  $mes=array();
          $cantidad=array();
                	 
	  foreach($meses as $item){
    		//process each item here
    		$mes[]=$item['m'];
                 }

          $cantidad=array();
	  foreach($cantidades as $item){
    		//process each item here
    		$cantidad[]=$item['m'];
                 }
         
        for($i=0;$i<count($mes);$i++){     
             $num=$mes[$i]-1;
             $valor=$cantidad[$i];
             $opciones[$num]=intval($valor);
             }

        if($usuario==-1)
        $titulo='Consultas de control postnatal del '.$anyo;
        else {
        $prof= Usuario::model()->findByPk($usuario);
        
        $titulo='Consultas de control prenatal del '.$anyo.' por el Usuario '.$prof->name.' '.$prof->apellido.' CI '.$prof->ci;
        }
        $tituloy='número de casos atendidos';
          
	$mesesAnyo=array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
	if(isset($_GET['excel'])){
	$content=$this->renderPartial("excel",array('categorias'=>$mesesAnyo,'resultados'=>$opciones,'titulo'=>$titulo),true);        
	yii::app()->request->sendFile('test.xls',$content);         
	}


         $this->render('reporte',array('anual'=>$opciones, 'titulo'=>$titulo , 'tituloy'=> $tituloy));
         }



public function actionReporteExam(){

    	 $usuario='-1';
	 if(isset($_POST['usuario']))
           $usuario=$_POST['usuario'];
          
	 elseif(isset($_GET['usuario'])) 
          $usuario=$_GET['usuario'];	  	  

	  if(isset($_POST['anyo']))
          $anyo=$_POST['anyo'];
	 elseif(isset($_GET['anyo'])) 
           $anyo=(int)$_GET['anyo'];
         else 
	throw new CHttpException(404,'elija un reporte y un anyo.');

      
          $opciones=array(0,0,0,0,0,0,0,0,0,0,0,0);  //representa los doce meses 
         
 	  $reporte= new Reporte;
          $resultado=$reporte->examen($anyo,$usuario);
          $meses=$resultado['meses'];
          $cantidades=$resultado['cantidades'];

	  $mes=array();
          $cantidad=array();
                	 
	  foreach($meses as $item){
    		//process each item here
    		$mes[]=$item['m'];
                 }

          $cantidad=array();
	  foreach($cantidades as $item){
    		//process each item here
    		$cantidad[]=$item['m'];
                 }
         
        for($i=0;$i<count($mes);$i++){     
             $num=$mes[$i]-1;
             $valor=$cantidad[$i];
             $opciones[$num]=intval($valor);
             }

          if($usuario==-1)
        $titulo='Consultas de examen fisico del '.$anyo;
        else {
        $prof= Usuario::model()->findByPk($usuario);
        
        $titulo='Consultas de examen fisico del '.$anyo.' por el Usuario '.$prof->name.' '.$prof->apellido.' CI '.$prof->ci;
        }
        $tituloy='número de examenes realizados';
          
	$mesesAnyo=array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
	if(isset($_GET['excel'])){
	$content=$this->renderPartial("excel",array('categorias'=>$mesesAnyo,'resultados'=>$opciones,'titulo'=>$titulo),true);        
	yii::app()->request->sendFile('test.xls',$content);         
	}
         $this->render('reporte',array('anual'=>$opciones, 'titulo'=>$titulo , 'tituloy'=> $tituloy));
         }



	public function actionReportePersonal()
	{
           $reporte= new Reporte;
           $consulta=$reporte->personales();
	  $categorias=array_keys($consulta[0]);
          $resultados=array_values($consulta[0]);

		    for($i=0;$i<count($categorias);$i++)
          {
		    $categorias[$i]= AntFamiliares::model()->getAttributeLabel($categorias[$i]);
          }
		  
         for($i=0;$i<count($resultados);$i++)
          {
            $resultados[$i]=intval($resultados[$i]);
          }
          
      
	$titulo='Antecedentes personales';
        $tituloy='número de casos positivos';
	  
        if(isset($_GET['excel'])){
	$content=$this->renderPartial("excel",array('categorias'=>$categorias,'resultados'=>$resultados,'titulo'=>$titulo),true);        
	yii::app()->request->sendFile('test.xls',$content);         
	}
           

          $this->render('reportegen',array('categorias'=>$categorias,'resultados'=>$resultados,'titulo'=>$titulo,'tituloy'=>$tituloy));
	}
	public function actionReporteFamiliares()
	{
           $reporte= new Reporte;
           $consulta=$reporte->familiares();
	  $categorias=array_keys($consulta[0]);
          $resultados=array_values($consulta[0]);

		   for($i=0;$i<count($categorias);$i++)
          {
		    $categorias[$i]= AntFamiliares::model()->getAttributeLabel($categorias[$i]);
          }
		  
		  
         for($i=0;$i<count($resultados);$i++)
          {
            $resultados[$i]=intval($resultados[$i]);
          }
          
      	$titulo='Antecedentes Familiares';
        $tituloy='número de casos positivos';

	if(isset($_GET['excel'])){
	$content=$this->renderPartial("excel",array('categorias'=>$categorias,'resultados'=>$resultados,'titulo'=>$titulo),true);        
	yii::app()->request->sendFile('test.xls',$content);         
	}

          $this->render('reportegen',array('categorias'=>$categorias,'resultados'=>$resultados,'titulo'=>$titulo,'tituloy'=>$tituloy));
	}



	
	
	public function actionReporteHabitos()
	{
          $reporte= new Reporte;
          $consulta=$reporte->habitos();
	      $categorias=array_keys($consulta[0]);
          $resultados=array_values($consulta[0]);
        
		 for($i=0;$i<count($categorias);$i++)
          {
		    $categorias[$i]= HabPsicobio::model()->getAttributeLabel($categorias[$i]);
          }
		  
		  
         for($i=0;$i<count($resultados);$i++)
          {
            $resultados[$i]=intval($resultados[$i]);
          }
      
	$titulo='Habitos Psicobiologicos';
        $tituloy='número de casos positivos';


  if(isset($_GET['excel'])){
	$content=$this->renderPartial("excel",array('categorias'=>$categorias,'resultados'=>$resultados,'titulo'=>$titulo),true);      
    $content=utf8_encode($content);	
	yii::app()->request->sendFile('reporte.xls',$content);         
	}


          $this->render('reportegen',array('categorias'=>$categorias,'resultados'=>$resultados,'titulo'=>$titulo,'tituloy'=>$tituloy));
	}
/** los metodos que terminan en form renderizan la forma con la acccion a donde va a ser ejecutado el reporte 
*
*/

    	public function actionReporteControlPrenatalForm(){
            $accion='reporte/reporteControlPrenatal';
            $usuarios= new Usuario;
            $lista=$usuarios->listarUsuarios();
            $this->render('_form2',array('accion'=>$accion,'lista'=>$lista));
       
	}

  	public function actionReportePostnatalForm(){
            $accion='reporte/reporteControlPostnatal';
	    $usuarios= new Usuario;
            $lista=$usuarios->listarUsuarios();
            $this->render('_form2',array('accion'=>$accion,'lista'=>$lista));
       
	}

  	public function actionReporteExamForm(){
            $accion='reporte/reporteExam';
           $usuarios= new Usuario;
            $lista=$usuarios->listarUsuarios();
            $this->render('_form2',array('accion'=>$accion,'lista'=>$lista));
       
	}

        public function actionConsultaForm(){
            $accion='reporte/reporteA';
            $usuarios= new Usuario;
            $lista=$usuarios->listarUsuarios();
            $this->render('_form2',array('accion'=>$accion,'lista'=>$lista));
       
	}



	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
