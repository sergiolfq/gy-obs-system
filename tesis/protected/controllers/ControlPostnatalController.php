<?php

class ControlPostnatalController extends Controller
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
				'actions'=>array('create','update','view'),
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
	$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ControlPostnatal']))
		{
			$model->attributes=$_POST['ControlPostnatal'];
			if($model->save())  // si se guarda el control   
                 {
				$bit= new Bitacora;					// se agrega a la bitacora 
                $bit->id_his=yii::app()->user->ultimaHistoria;
				$bit->id_u=yii::app()->user->id_u;
				$bit->descripcion_bit="se actualizo control postnatal ";
                $bit->fecha_bit=date('Y-m-d');
                $bit->save();
									// se imprime notificación y se redirecciona
				Yii::app()->user->setFlash('success', "Control postnatal guardado exitosamente!");
			    $this->redirect(array('historia/update','id'=>yii::app()->user->ultimaHistoria));
                 }
			else {  // sino se envia una notificación de error y se refresca la página
                    Yii::app()->user->setFlash('error', "Error al guardar Control prenatal  ");
                    $this->refresh();
                }
		}

		$this->render('view',array(
			'model'=>$model,
		));
	
		/*$this->render('view',array(
			'model'=>$this->loadModel($id),
		));*/
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ControlPostnatal;
	
                if(!isset(yii::app()->user->ultimaHistoria))
                        throw new CHttpException(403,'Consulte por favor una historia.'); 
	
                if(!isset(yii::app()->user->id_emb))
                        throw new CHttpException(403,'No hay embarazo activo.');                               

		$historia=Historia::model()->findByPk(yii::app()->user->ultimaHistoria);
                $id_emb=$historia->getEmbId();                                          //obtiene el id embarazo
                 
                  

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ControlPostnatal']))
		{
		    for($i=0;$i<20;$i++)
			{  
			
			$model=new ControlPostnatal;
			
			//$model->attributes=$_POST['ControlPostnatal'];
			$model->observaciones_con="jjjjjjjj ";
			
			$embarazos=array(1,2,28,38,10,12,13,16,4,29,69,89,53,61,52);
			$j=$embarazos[rand(0,count($embarazos)-1)];
			
			
 			$model->id_emb=$j;
                        $model->fecha_con_pos=date('Y-m-d');

			if($model->save())
                            {
				$bit= new Bitacora;					// se agrega a la bitacora 
                $bit->id_his=yii::app()->user->ultimaHistoria;
				$bit->id_u=yii::app()->user->id_u;
				$bit->descripcion_bit="se creo control postnatal ";
                $bit->fecha_bit=date('Y-m-d');
                $bit->save();


			    Yii::app()->user->setFlash('success', "Control postnatal guardado exitosamente!");
			   //   $this->redirect(array('historia/update','id'=>yii::app()->user->ultimaHistoria));
                            }
			else {
                                  Yii::app()->user->setFlash('error', "Error al guardar Control prenatal  ");
                              //    $this->refresh();
                             }

           }

		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/*
public function actionCreate()
	{
		$model=new ControlPostnatal;
	
                if(!isset(yii::app()->user->ultimaHistoria))
                        throw new CHttpException(403,'Consulte por favor una historia.'); 
	
                if(!isset(yii::app()->user->id_emb))
                        throw new CHttpException(403,'No hay embarazo activo.');                               

		$historia=Historia::model()->findByPk(yii::app()->user->ultimaHistoria);
                $id_emb=$historia->getEmbId();                                          //obtiene el id embarazo
                 
                  

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ControlPostnatal']))
		{
			$model->attributes=$_POST['ControlPostnatal'];
 			$model->id_emb=$id_emb;
                        $model->fecha_con_pos=date('Y-m-d');

			if($model->save())
                            {
				$bit= new Bitacora;					// se agrega a la bitacora 
                		$bit->id_his=yii::app()->user->ultimaHistoria;
				$bit->id_u=yii::app()->user->id_u;
				$bit->descripcion_bit="se creo control postnatal ";
                		$bit->fecha_bit=date('Y-m-d');
                		$bit->save();


			      Yii::app()->user->setFlash('success', "Control postnatal guardado exitosamente!");
			      $this->redirect(array('historia/update','id'=>yii::app()->user->ultimaHistoria));
                            }
			else {
                                  Yii::app()->user->setFlash('error', "Error al guardar Control prenatal  ");
                                  $this->refresh();
                             }



		}

		$this->render('create',array(
			'model'=>$model,
		));
	}	
	*/
	
	
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ControlPostnatal']))
		{
			$model->attributes=$_POST['ControlPostnatal'];
			if($model->save())
                            {
				$bit= new Bitacora;					// se agrega a la bitacora 
                		$bit->id_his=yii::app()->user->ultimaHistoria;
				$bit->id_u=yii::app()->user->id_u;
				$bit->descripcion_bit="se actualizo control postnatal ";
                		$bit->fecha_bit=date('Y-m-d');
                		$bit->save();

			      Yii::app()->user->setFlash('success', "Control postnatal guardado exitosamente!");
			    //  $this->redirect(array('update','id'=>$model->id_cont_post));
			      $this->redirect(array('historia/update','id'=>yii::app()->user->ultimaHistoria));
                            }
			else {
                                  Yii::app()->user->setFlash('error', "Error al guardar Control prenatal  ");
                                  $this->refresh();
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

		$bit= new Bitacora;					// se agrega a la bitacora 
                $bit->id_his=yii::app()->user->ultimaHistoria;
		$bit->id_u=yii::app()->user->id_u;
		$bit->descripcion_bit="se elimino control postnatal ";
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
		$dataProvider=new CActiveDataProvider('ControlPostnatal');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ControlPostnatal('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ControlPostnatal']))
			$model->attributes=$_GET['ControlPostnatal'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ControlPostnatal the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		if(isset(yii::app()->user->ultimaHistoria)){
            	$historia=Historia::model()->findByPk(yii::app()->user->ultimaHistoria);
                $id_emb=$historia->getEmbId(); }
		$model=ControlPostnatal::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		if(!isset(yii::app()->user->ultimaHistoria))
                        throw new CHttpException(403,'Consulte por favor una historia.');
              //  if($model->id_emb!=$id_emb)
              //          throw new CHttpException(403,'Consulte por favor un registro de la historia consultada.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ControlPostnatal $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='control-postnatal-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
