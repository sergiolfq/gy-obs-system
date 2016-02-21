<?php

class EmbarazoController extends Controller
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
				'actions'=>array('create','update','view'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin'),
				'users'=>array('@'),
			),
		array('deny', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete'),
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
	
	$model=$this->loadModel($id);

	//validaciones 
              

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Embarazo']))
		{
			$model->attributes=$_POST['Embarazo'];
       			$model->historia_id_his=yii::app()->user->ultimaHistoria;
                        $model->estado=1;
 			
			if(isset($_POST['desactivar']))  // si se ha enviado
                         {
			  //   var_dump($_POST['desactivar']);
			 //    yii::app()->end(); 
				
                            if($_POST['desactivar']==1)  // si se ha marcado se desactivara 
			     {
                              $model->estado=0; 
                             $model->save();   
			     yii::app()->user->id_emb=null;

			     $bit= new Bitacora;					// se agrega a la bitacora 
                	     $bit->id_his=yii::app()->user->ultimaHistoria;
			     $bit->id_u=yii::app()->user->id_u;
		 	     $bit->descripcion_bit="se desactivo embarazo ";
                	     $bit->fecha_bit=date('Y-m-d');
                	     $bit->save();

			     }
			 }




			if($model->save()){

			     $bit= new Bitacora;					// se agrega a la bitacora 
                	     $bit->id_his=yii::app()->user->ultimaHistoria;
			     $bit->id_u=yii::app()->user->id_u;
		 	     $bit->descripcion_bit="se actualizo embarazo ";
                	     $bit->fecha_bit=date('Y-m-d');
                	     $bit->save();

                   	   Yii::app()->user->setFlash('success', "Datos de embarazo actualizados exitosamente!");                    
			   $this->redirect(array('historia/update/','id'=>$model->historia_id_his));
                                          }
                       
		}

		$this->render('view',array(
			'model'=>$model,
		));
		
		
	//	$this->render('view',array(
	//		'model'=>$this->loadModel($id),
	//	));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	

	
	public function actionCreate()
	{
		$model=new Embarazo;                //validacion 
        $model->estado=0;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Embarazo']))
		{
			$model->attributes=$_POST['Embarazo'];
            $model->historia_id_his=yii::app()->user->ultimaHistoria;
            $model->estado=1;
			
			if($model->save()){

			$bit= new Bitacora;					// se agrega a la bitacora 
            $bit->id_his=yii::app()->user->ultimaHistoria;
			$bit->id_u=yii::app()->user->id_u;
			$bit->descripcion_bit="se creo embarazo ";
            $bit->fecha_bit=date('Y-m-d');
            $bit->save();
			

                                          //setflashes
            Yii::app()->user->setFlash('success', "Datos de embarazo guardados exitosamente!");
			$this->redirect(array('historia/update/','id'=>$model->historia_id_his));
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
		$model=$this->loadModel($id);

	//validaciones 
              

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Embarazo']))
		{
			$model->attributes=$_POST['Embarazo'];
       			$model->historia_id_his=yii::app()->user->ultimaHistoria;
                        $model->estado=1;
 			
			if(isset($_POST['desactivar']))  // si se ha enviado
                         {
			  //   var_dump($_POST['desactivar']);
			 //    yii::app()->end(); 
				
                            if($_POST['desactivar']==1)  // si se ha marcado se desactivara 
			     {
                              $model->estado=0; 
                             $model->save();   
			     yii::app()->user->id_emb=null;

			     $bit= new Bitacora;					// se agrega a la bitacora 
                	     $bit->id_his=yii::app()->user->ultimaHistoria;
			     $bit->id_u=yii::app()->user->id_u;
		 	     $bit->descripcion_bit="se desactivo embarazo ";
                	     $bit->fecha_bit=date('Y-m-d');
                	     $bit->save();

			     }
			 }




			if($model->save()){

			     $bit= new Bitacora;					// se agrega a la bitacora 
                	     $bit->id_his=yii::app()->user->ultimaHistoria;
			     $bit->id_u=yii::app()->user->id_u;
		 	     $bit->descripcion_bit="se actualizo embarazo ";
                	     $bit->fecha_bit=date('Y-m-d');
                	     $bit->save();

                   	   Yii::app()->user->setFlash('success', "Datos de embarazo actualizados exitosamente!");                    
			   $this->redirect(array('historia/update/','id'=>$model->historia_id_his));
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
		$dataProvider=new CActiveDataProvider('Embarazo');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Embarazo('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Embarazo']))
			$model->attributes=$_GET['Embarazo'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Embarazo the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Embarazo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		else if(!isset(yii::app()->user->ultimaHistoria))
			throw new CHttpException(403,'Por favor consulte una historia.');
                else if ($model->historia_id_his!=yii::app()->user->ultimaHistoria)
			throw new CHttpException(403,'Por favor consulte una historia.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Embarazo $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='embarazo-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
