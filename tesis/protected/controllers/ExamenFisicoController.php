<?php

class ExamenFisicoController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
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
	$a=$this->loadModel($id);
                $b=GenitalesExternos::model()->findByPk($a->id_genitales_externos);
                $c=CuelloUterino::model()->findByPk($a->id_cuello_uterino);
                $d=Matriz::model()->findByPk($a->id_mat);
                $e=Anexo::model()->findByPk($a->id_an);
                $f=Parametrios::model()->findByPk($a->id_par);

                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['GenitalesExternos']))
		{                                                       // agregar a los objetos 
			//$a->attributes=$_POST['ExamenFisico'];
                        $b->attributes=$_POST['GenitalesExternos'];                      
			$c->attributes=$_POST['CuelloUterino'];
                        $d->attributes=$_POST['Matriz'];
                        $e->attributes=$_POST['Anexo'];
                        $f->attributes=$_POST['Parametrios'];
                        
                        $b->save();
                        $c->save();
                        $d->save();
                        $e->save();
                        $f->save();


			if($a->save()){

			$bit= new Bitacora;					// se agrega a la bitacora 
                	$bit->id_his=yii::app()->user->ultimaHistoria;
			$bit->id_u=yii::app()->user->id_u;
			$bit->descripcion_bit="se actualizo examen fisico ";
                	$bit->fecha_bit=date('Y-m-d');
                	$bit->save();

                                Yii::app()->user->setFlash('success', "Examen Fisico Actualizado Exitosamente");
				$this->redirect(array('historia/update','id'=>yii::app()->user->ultimaHistoria));
					}
                        else {
                                Yii::app()->user->setFlash('error', "Examen Fisico Actualizado Exitosamente");
                        	$this->refresh();
                             }
		}

		$this->render('view',array(
			'a'=>$a,'b'=>$b,'c'=>$c,'d'=>$d,'e'=>$e,'f'=>$f
		));
	
	
		//$this->render('view',array(
		//	'model'=>$this->loadModel($id),
		//));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	
    public function actionCreate()
	{
		$a=new ExamenFisico;
                $b=new GenitalesExternos;
                $c=new CuelloUterino;
                $d=new Matriz;
                $e=new Anexo;
                $f=new Parametrios;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['GenitalesExternos']))
		{
                       $transaction = Yii::app()->db->beginTransaction();
			try
			{
		        
   			$b->attributes=$_POST['GenitalesExternos'];                      
			$c->attributes=$_POST['CuelloUterino'];
                        $d->attributes=$_POST['Matriz'];
                        $e->attributes=$_POST['Anexo'];
                        $f->attributes=$_POST['Parametrios'];
                        
                        $b->save();
                        $c->save();
                        $d->save();
                        $e->save();
                        $f->save();

                        $a->id_genitales_externos=$b->primaryKey;
                        $a->id_cuello_uterino=$c->primaryKey;
			$a->id_mat=$d->primaryKey;
                        $a->id_an=$e->primaryKey;
			$a->id_par=$f->primaryKey;
                        $a->id_his=yii::app()->user->ultimaHistoria;
			$a->fecha=date('Y-m-d');	                       
			
                        $a->save();            
                        $transaction->commit();

			$bit= new Bitacora;					// se agrega a la bitacora 
                	$bit->id_his=yii::app()->user->ultimaHistoria;
			$bit->id_u=yii::app()->user->id_u;
			$bit->descripcion_bit="se creo examen fisico ";
                	$bit->fecha_bit=date('Y-m-d');
                	$bit->save();

                        Yii::app()->user->setFlash('success', "Examen Fisico Guardados Exitosamente");
			$this->redirect(array('historia/update','id'=>yii::app()->user->ultimaHistoria));
                            
              
                   
			}
                         catch(Exception $ex)
                                {
                                   $transaction->rollBack();
                                   Yii::app()->user->setFlash('error', "Error al guardar Examen Fisico");
                                   $this->refresh();
                                   //agregar flashes 
                                  
                                }

			//if($model->save())
			//	$this->redirect(array('view','id'=>$model->id_exa));
		}

		$this->render('create',array('a'=>$a,'b'=>$b,'c'=>$c,'d'=>$d,'e'=>$e,'f'=>$f));
	}

	
	
	
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$a=$this->loadModel($id);
                $b=GenitalesExternos::model()->findByPk($a->id_genitales_externos);
                $c=CuelloUterino::model()->findByPk($a->id_cuello_uterino);
                $d=Matriz::model()->findByPk($a->id_mat);
                $e=Anexo::model()->findByPk($a->id_an);
                $f=Parametrios::model()->findByPk($a->id_par);

                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['GenitalesExternos']))
		{                                                       // agregar a los objetos 
			//$a->attributes=$_POST['ExamenFisico'];
                        $b->attributes=$_POST['GenitalesExternos'];                      
			$c->attributes=$_POST['CuelloUterino'];
                        $d->attributes=$_POST['Matriz'];
                        $e->attributes=$_POST['Anexo'];
                        $f->attributes=$_POST['Parametrios'];
                        
                        $b->save();
                        $c->save();
                        $d->save();
                        $e->save();
                        $f->save();


			if($a->save()){

			$bit= new Bitacora;					// se agrega a la bitacora 
                	$bit->id_his=yii::app()->user->ultimaHistoria;
			$bit->id_u=yii::app()->user->id_u;
			$bit->descripcion_bit="se actualizo examen fisico ";
                	$bit->fecha_bit=date('Y-m-d');
                	$bit->save();

                                Yii::app()->user->setFlash('success', "Examen Fisico Actualizado Exitosamente");
				$this->redirect(array('historia/update','id'=>yii::app()->user->ultimaHistoria));
					}
                        else {
                                Yii::app()->user->setFlash('error', "Examen Fisico Actualizado Exitosamente");
                        	$this->refresh();
                             }
		}

		$this->render('update',array(
			'a'=>$a,'b'=>$b,'c'=>$c,'d'=>$d,'e'=>$e,'f'=>$f
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
			$bit->descripcion_bit="se elimino examen fisico ";
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
		$dataProvider=new CActiveDataProvider('ExamenFisico');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ExamenFisico('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ExamenFisico']))
			$model->attributes=$_GET['ExamenFisico'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ExamenFisico the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		if(yii::app()->user->ultimaHistoria){
		$model=ExamenFisico::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
                else if($model->id_his!=yii::app()->user->ultimaHistoria)
                        throw new CHttpException(403,' examen no corresponde a la historia por favor consulte una historia.');
                  }
		 else {	
			throw new CHttpException(403,'Por favor consulte una historia.');}
		return $model;

	}

	/**
	 * Performs the AJAX validation.
	 * @param ExamenFisico $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='examen-fisico-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
