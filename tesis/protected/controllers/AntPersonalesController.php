<?php

class AntPersonalesController extends Controller
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
			/*array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),*/
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new AntPersonales;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                if(isset(yii::app()->user->ultimaHistoria))
                {
		if(isset($_POST['AntPersonales']))
		{
			$model->attributes=$_POST['AntPersonales'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_ant_per));
		}

		$this->render('create',array(
			'model'=>$model,
		));
                }else 
                       throw new CHttpException(403,'Por favor consulte una historia.');               
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
	   
		$model=$this->loadModel($id);                                   //verificar que sea el antecedente de esa persona si no lo envio a consulta

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['AntPersonales']))
		{
			$model->attributes=$_POST['AntPersonales'];
			if($model->save()){

                        $bit= new Bitacora;					// se agrega a la bitacora 
                        $bit->id_his=yii::app()->user->ultimaHistoria;
			$bit->id_u=yii::app()->user->id_u;
			$bit->descripcion_bit="se actualizo antecedentes personales";
                        $bit->fecha_bit=date('Y-m-d');
                        $bit->save();

                                Yii::app()->user->setFlash('success', "Antecedentes Personales Guardados Exitosamente");
 				$this->redirect(array('historia/update','id'=>yii::app()->user->ultimaHistoria));

                                  }
                            else {
				 Yii::app()->user->setFlash('success', " Problema al guardar Antecedentes Personales");
                                 }
		}

		$this->render('update',array(
			'model'=>$model,
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
		$dataProvider=new CActiveDataProvider('AntPersonales');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new AntPersonales('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['AntPersonales']))
			$model->attributes=$_GET['AntPersonales'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * valida que este en la historia, si no le pedira que haga una consulta,  tambien valida que sea el antecedente de la consulta actual.
	 * @param integer $id the ID of the model to be loaded
	 * @return AntPersonales the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)                                                        
	{
                if(isset(yii::app()->user->ultimaHistoria)){
                $hist=Historia::model()->find(' id_his = '.yii::app()->user->ultimaHistoria);
                $ant=Antecedentes::model()->find(' id_ant = '.$hist->id_ant);	
		$model=AntPersonales::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
                else if($ant->id_ant_per!=$id)
                       	throw new CHttpException(403,'Por favor haga una consulta primero.');
		} else 
                   throw new CHttpException(403,'Por favor haga una consulta primero.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param AntPersonales $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='ant-personales-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
