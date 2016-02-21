<?php

class UsuarioController extends Controller
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
			),  */
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update','view'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create'),
				'users'=>array('super'), // agregar  restincion al agregar ningun otro se puede llamar super 
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
	{       if(yii::app()->user->id_u!=$id&&yii::app()->user->name!='super')                        // si no es su perfil y tampoco es super usuario 
                throw new CHttpException(404,'No tiene permiso para ver.');

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
		$model=new Usuario;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Usuario']))
		{
			$model->attributes=$_POST['Usuario'];
                        $model->password=md5($model->password);    // linea que cre usuarios con  sha1 
			if($model->save()){


				$bit= new Bitacora;					// se agrega a la bitacora 
                	//	$bit->id_his=yii::app()->user->ultimaHistoria;
				$bit->id_u=yii::app()->user->id_u;
				$bit->descripcion_bit="se ha creado usuario ";
                		$bit->fecha_bit=date('Y-m-d');
                		$bit->save();


    				Yii::app()->user->setFlash('success', "Usuario creado sactisfactoriamente");
				$this->redirect(array('view','id'=>$model->id_u));
				          }
                           else 
    				Yii::app()->user->setFlash('error', "Error al crear Usuario");
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
               if(yii::app()->user->id_u!=$id&&yii::app()->user->name!='super')                        // si no es su perfil y tampoco es super usuario 
                throw new CHttpException(404,'No tiene permiso para modificar.');

		$model=$this->loadModel($id);
        $modelpas=$model->password;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		
		if(isset($_POST['Usuario']))
		{
			$model->attributes=$_POST['Usuario'];
			if(sha1($model->password)!=$modelpas&&$model->password!=null)  // si hubo cambio se hace sha1 y se guarda 
            {     
			  $model->password=sha1(trim($model->password));
			  
			}else 
			$model->password=$modelpas;
                        
			if($model->save()){
                      //  var_dump($model);
			//yii::app()->end(); 
			$bit= new Bitacora;

			//if(isset(yii::app()->user->ultimaHistoria))					// se agrega a la bitacora 
                	//$bit->id_his=yii::app()->user->ultimaHistoria;
                        //else
			//$bit->id_his=1;

			$bit->id_u=yii::app()->user->id_u;
			$bit->descripcion_bit="se ha actualizado usuario ";
            $bit->fecha_bit=date('Y-m-d');
            $bit->save();

    		Yii::app()->user->setFlash('success', "Usuario actualizado sactisfactoriamente");
			
			
			$this->redirect(array('view','id'=>$model->id_u));
           
            }
            else 
                Yii::app()->user->setFlash('error', "error al actualizar Usuario ");

		} unset($model->password); 
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
             	if(yii::app()->user->id_u!=$id)     {                   // si no el mismo entonces borra, si no, no puede borrar
		$model=$this->loadModel($id)->delete();
    		Yii::app()->user->setFlash('success', "Usuario eliminado sactisfactoriamente");

		$bit= new Bitacora;					// se agrega a la bitacora 
               // $bit->id_his=yii::app()->user->ultimaHistoria;
		$bit->id_u=yii::app()->user->id_u;
		$bit->descripcion_bit="se ha eliminado usuario ";
                $bit->fecha_bit=date('Y-m-d');
                $bit->save();	   

 		}
		else
                throw new CHttpException(404,'No tiene permiso para modificar.');
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Usuario');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Usuario('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Usuario']))
			$model->attributes=$_GET['Usuario'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Usuario the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Usuario::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Usuario $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='usuario-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
