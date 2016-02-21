<?php

class PersonaController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),*/
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
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
	 * Crea una persona y con esta crea todo lo necesario para crear una historia y se la asigna .
	 * 
	 */
	public function actionCreate()
	{
		$model=new Persona;
                $historia=new Historia;
		$antecedente=new Antecedentes;    // se crea antecedentes y sus dependientes 
                $ant_fam=new AntFamiliares; 
                $ant_per=new AntPersonales;
                $hab= new HabPsicobio; 

                            

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

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
                        Yii::app()->user->setFlash('success', "Persona registrada Exitosamente");
   			
			$bit= new Bitacora;					// se agrega a la bitacora 
                        $bit->id_his=$historia->id_his;
			$bit->id_u=yii::app()->user->id_u;
			$bit->descripcion_bit="se agrego una historia";
                        $bit->fecha_bit=date('Y-m-d');
                        $bit->save();
                

		        $this->redirect(array('historia/update/','id'=>$historia->id_his));       // redirecciono a historia 
                        } 
                          }
                          catch(Exeption $e){
                                  $transaction->rollBack();
                                  Yii::app()->user->setFlash('error', "Error al registrar Persona");          
					    }
			
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
               try{
                $model=$this->loadModel($id);
                if($model->getHis())                                                      //preguntamos si tiene historia  
		$this->redirect(array('historia/update','id'=>$model->getHis()->id_his)); // hacemos la redireccion a historia/update 
                 else {                                                                   // si no tiene le hacemos un redirect a consultar 
                        Yii::app()->user->setFlash('error', "Error al consultar Persona");           
                        $this->redirect(array('persona/admin')); // hacemos la redireccion a persona/admin
                      }
                  }
                   catch(Exception $e)
                      {
                        Yii::app()->user->setFlash('error', "Error al consultar Persona");           
                        $this->redirect(array('persona/admin')); // hacemos la redireccion a persona/admin
                      }
	/*	$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Persona']))
		{
			$model->attributes=$_POST['Persona'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_p));
		}

		$this->render('update',array(
			'model'=>$model,
		));*/
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
		$dataProvider=new CActiveDataProvider('Persona');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Persona('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Persona']))
			$model->attributes=$_GET['Persona'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Persona the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Persona::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Persona $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='persona-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
