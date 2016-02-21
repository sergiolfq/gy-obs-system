<?php

class HistoriaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
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
		/*	array('allow',  // allow all users to perform 'index' and 'view' actions
//				'actions'=>array(),
				'users'=>array('*'),
			),*/
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
                                'actions'=>array('delete','index','view'),
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$historia=new Historia;             //$a
		$model=new Persona;                 //$b
		$antecedente=new Antecedentes;    // se crea antecedentes y sus dependientes 
                $ant_fam=new AntFamiliares; 
                $ant_per=new AntPersonales;
                $hab= new HabPsicobio; 

                /*$a=new Persona;
		$b=new Historia;*/

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

	/*	if(isset($_POST['Persona']))
		{
			$a->attributes=$_POST['Persona'];
			if(a->save())
				$this->redirect(array('view','id'=>$model->id_his));
		}
        */
		if(isset($_POST['Persona']))
		{     
			$model->attributes=$_POST['Persona'];

                       try{

			if($model->save())
			{
                        $transaction = Yii::app()->db->beginTransaction();      //transaccion yii 
    			$ant_fam->save();              // se guardan los antecedentes  especificos
                	$ant_per->save();
                	$hab->save();

                	$antecedente->id_ant_fam=$ant_fam->id_ant_fam;  // se asignan a la tabla antecedentes
                	$antecedente->id_ant_per=$ant_per->id_ant_per;  
                	$antecedente->id_hab=$hab->id_hab; 
                        
                      	$antecedente->save();                             // se guardan los antecedentes 
                  
                	$historia->id_ant=$antecedente->id_ant;              // se asigna la historia medica 
                	$historia->id_p=$model->id_p; 
			$historia->save();                               // se guarda la historia medica 
                        $transaction->commit();                          // se termina la transaccion 

                        $bit= new Bitacora;					// se agrega a la bitacora 
                        $bit->id_his=$historia->id_his;
			$bit->id_u=yii::app()->user->id_u;
			$bit->descripcion_bit="se agrego una historia";
                        $bit->save();

			$this->redirect(array('update','id'=>$historia->id_his)); //lo cambio para que redireccione al modificar historia
                        } 
                          }
                          catch(Exeption $e){
                                  $transaction->rollBack();
                                 //aplicar set flashes o lo que sea          
					    }
			
		}

		$this->render('create',array(
			'a'=>$historia,'b'=>$model
		));
	}

	/**
	 * Updates a particular model.
	 * si se modifica bien actualizara la informacion personala y recargara la página. 
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$a=$this->loadModel($id);	//historia
        $b=Persona::model()->findByPk($a->id_p); //persona
        yii::app()->user->setState("ultimaHistoria",$id);
	    //validacion en caso de que ya exista la consulta 
		$exists = Consulta::model()->exists(" id_his = ".$a->id_his." AND fecha_con = '".date('Y-m-d')."' AND id_u = ".yii::app()->user->id_u);

 		if($exists==false)
                {
                  $consulta= new Consulta;
                  $consulta->fecha_con=date('Y-m-d');
                  $consulta->id_his=$a->id_his;
                  $consulta->id_u=yii::app()->user->id_u;
                  $consulta->save();
                }
        if($a->getEmbId()!=null){                                     // si tiene embarazo activo 
                  $embarazo=Embarazo::model()->findByPk($a->getEmbId());       // lo seleccionamos 
                  $incial=strtotime($embarazo->fecha_inicial);              // tomamos la fecha inicial en seg
		          $actual=strtotime('now');                                 // tomamos la fecha actual en seg
                  $total=$incial-$actual;                                   // obtenemos el total
                  yii::app()->user->setState('id_emb',$a->getEmbId());      //cargamos en session id_emb
                   if( $total >= 55641600 )  // si es mayor o igual a un anyo y nueve meses         //si es mayor a un ano y nueve meses en seg 
                     {
		              $embarazo->estado=0;                                   //desactivar su estado 
                      $embarazo->save();   
                      yii::app()->user->id_emb=null;                         //guardar 
                     }
               // comprobar si esta marcado el checkbox y desactivar 
                  } else 
					yii::app()->user->setState('id_emb',$a->getEmbId());      //cargamos en session id_emb

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Persona']))
		{
			$b->attributes=$_POST['Persona'];
	       		if($b->save()){

                        $bit= new Bitacora;					// se agrega a la bitacora 
                        $bit->id_his=yii::app()->user->ultimaHistoria;
			$bit->id_u=yii::app()->user->id_u;
			$bit->descripcion_bit="se actualizo datos personales";
                        $bit->fecha_bit=date('Y-m-d');
                        $bit->save();

                                Yii::app()->user->setFlash('success', "Datos Personales del paciente guardados  exitosamente!");
				$this->redirect(array('update','id'=>$a->id_his));
				      }
				else {
                                Yii::app()->user->setFlash('error', "Error al guardar datos personales!");
					}
		}

		$this->render('update',array(
			'a'=>$a,'b'=>$b
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Historia');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Historia('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Historia']))
			$model->attributes=$_GET['Historia'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Historia the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Historia::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Historia $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='historia-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
