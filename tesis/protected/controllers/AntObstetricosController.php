<?php

class AntObstetricosController extends Controller
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
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'crear' page. donde se pueden ver y administrar los demas antecedentes 
	 * varifica si tiene una consulta abierta 
	 */
	public function actionCreate()
	{
		$a=new AntObstetricos;  // antecedente a crear 
                $b=new AntObstetricos;  // todos los antecedente a mostrar 
              
              
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                if(yii::app()->user->ultimaHistoria){                   //varifica si tiene una consulta abierta 
                $ant=Historia::model()->findByPk(yii::app()->user->ultimaHistoria)->id_ant;  //consigo antecedente

		if(isset($_POST['AntObstetricos']))
		{
			$a->attributes=$_POST['AntObstetricos'];
                        $a->id_ant=$ant;
			if($a->save()){

                        $bit= new Bitacora;					// se agrega a la bitacora 
                        $bit->id_his=yii::app()->user->ultimaHistoria;
			$bit->id_u=yii::app()->user->id_u;
			$bit->descripcion_bit="se creo antecedente obstetrico ";
                        $bit->fecha_bit=date('Y-m-d');
                        $bit->save();

                                $a=new AntObstetricos;                                // inicializo el objeto en caso de que quiera agregar otro antecedente.
                                Yii::app()->user->setFlash('success', "Antecedentes Obstetricos Guardados Exitosamente");
				$this->redirect(array('create'));
                                      }
                                     else {
                                	   Yii::app()->user->setFlash('error', "Error al guardar Antecedentes Obstetricos ");
                                          }
		}

		$this->render('create',array('a'=>$a,'b'=>$b));
                }else 
                     throw new CHttpException(403,'Por favor haga una consulta primero.');
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$a=$this->loadModel($id);
                $b=new AntObstetricos;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['AntObstetricos']))
		{
			$a->attributes=$_POST['AntObstetricos'];
			if($a->save()){
   			
			$bit= new Bitacora;					// se agrega a la bitacora 
                        $bit->id_his=yii::app()->user->ultimaHistoria;
			$bit->id_u=yii::app()->user->id_u;
			$bit->descripcion_bit="se actualizo antecedente obstetrico ";
                        $bit->fecha_bit=date('Y-m-d');
                        $bit->save();
                                        Yii::app()->user->setFlash('success', "Antecedentes Personales Guardados Exitosamente");                                    
					$this->redirect(array('create'));

				      }
                                      else {
                                             Yii::app()->user->setFlash('error', "Error al guardar Antecedentes Personales ");
                                           }
				//$this->redirect(array('view','id'=>$a->id_ant_obs));
		}

		$this->render('update',array('a'=>$a,'b'=>$b));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

   		$bit= new Bitacora;					// se agrega a la bitacora 
                $bit->id_his=yii::app()->user->ultimaHistoria;
		$bit->id_u=yii::app()->user->id_u;
		$bit->descripcion_bit="se elimino antecedente obstetrico ";
                $bit->fecha_bit=date('Y-m-d');
                $bit->save();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('AntObstetricos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new AntObstetricos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['AntObstetricos']))
			$model->attributes=$_GET['AntObstetricos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return AntObstetricos the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)                    //cambiar y documentar 
	{
		$model=AntObstetricos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param AntObstetricos $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='ant-obstetricos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
