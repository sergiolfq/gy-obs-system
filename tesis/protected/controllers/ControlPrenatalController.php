<?php

class ControlPrenatalController extends Controller
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
				'actions'=>array('create','update','verEcograma'),
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

		if(isset($_POST['ControlPrenatal']))
		{
			$model->attributes=$_POST['ControlPrenatal'];
		//	$model->ecograma=CUploadedFile::getInstance($model,'ecograma');
			if($model->save()){
                //                $webroot = Yii::getPathOfAlias('webroot');
		//	        $model->ecograma->saveAs($webroot."/images/ecogramas/".$model->ecograma);

 			$bit= new Bitacora;					// se agrega a la bitacora 
                        $bit->id_his=yii::app()->user->ultimaHistoria;
			$bit->id_u=yii::app()->user->id_u;
			$bit->descripcion_bit="se actualizo control prenatal ";
                        $bit->fecha_bit=date('Y-m-d');
                        $bit->save();



                        Yii::app()->user->setFlash('success', "Control prenatal guardados exitosamente!");
			$this->redirect(array('update','id'=>$model->id_con_pre));
                                         }
                        else {
                        Yii::app()->user->setFlash('error', "error al guardar Control prenatal ");
                        $this->refresh();
                        }
		}

		$this->render('view',array(
			'model'=>$model,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */ 
		
	public function actionCreate()
	{                                               // validaciones 
     	        if(!isset(yii::app()->user->ultimaHistoria))
				throw new CHttpException(403,'Consulte por favor una historia.');
				if(!isset(yii::app()->user->id_emb)){
				throw new CHttpException(403,'No hay embarazo activo.');  
													}

		$model=new ControlPrenatal;
              
        $historia=Historia::model()->findByPk(yii::app()->user->ultimaHistoria);
        $id_emb=$historia->getEmbId();                                          //obtiene el id embarazo
                  
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ControlPrenatal']))
		{
			$model->attributes=$_POST['ControlPrenatal'];
            $model->embarazo_id_emb=$id_emb;
            $model->fecha=date('Y-m-d');
			//$model->ecograma=CUploadedFile::getInstance($model,'ecograma');

			if($model->save()){
		//	$webroot = Yii::getPathOfAlias('webroot');
		//	$model->ecograma->saveAs($webroot."/images/ecogramas/".$model->ecograma);
                       //agregar flashes 

			$bit= new Bitacora;					// se agrega a la bitacora 
            $bit->id_his=yii::app()->user->ultimaHistoria;
			$bit->id_u=yii::app()->user->id_u;
			$bit->descripcion_bit="se creo control prenatal ";
            $bit->fecha_bit=date('Y-m-d');
            $bit->save();

            Yii::app()->user->setFlash('success', "Control prenatal guardados exitosamente!");
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

		if(isset($_POST['ControlPrenatal']))
		{
			$model->attributes=$_POST['ControlPrenatal'];
		//	$model->ecograma=CUploadedFile::getInstance($model,'ecograma');
			if($model->save()){
                //                $webroot = Yii::getPathOfAlias('webroot');
		//	        $model->ecograma->saveAs($webroot."/images/ecogramas/".$model->ecograma);

 			$bit= new Bitacora;					// se agrega a la bitacora 
                        $bit->id_his=yii::app()->user->ultimaHistoria;
			$bit->id_u=yii::app()->user->id_u;
			$bit->descripcion_bit="se actualizó control prenatal ";
                        $bit->fecha_bit=date('Y-m-d');
                        $bit->save();



                        Yii::app()->user->setFlash('success', "Control prenatal guardados exitosamente!");
			$this->redirect(array('update','id'=>$model->id_con_pre));
                                         }
                        else {
                        Yii::app()->user->setFlash('error', "error al guardar Control prenatal ");
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
		$bit->descripcion_bit="se elimino control prenatal ";
                $bit->fecha_bit=date('Y-m-d');
                $bit->save();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
/** ayuda a mostrar la extension de un archivo
*
*/
	
/** crea el mime type para mostrar archivo en vista verEco
*
*/
	public function actionVerEcograma($id){

         $model=$this->loadModel($id); 
         $extension=substr(strrchr($model->ecograma,'.'),1);


         if($extension=='jpe'||$extension=='jpeg'||$extension=='jpg'||$extension=='gif'||$extension=='bmp')
         $mime='image/'.$extension;

	 else if($extension=='pdf')
         $mime='application/'.$extension;

	 $webroot = Yii::getPathOfAlias('webroot');
         $path=$webroot.'/images/ecogramas/'.$model->ecograma;
   //      $path=Yii::app()->baseUrl.'/images/'.$model->ecograma; 
   

	 $this->render('verEcograma',array('mime'=>$mime,'path'=>$path));         

         }




	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ControlPrenatal');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ControlPrenatal('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ControlPrenatal']))
			$model->attributes=$_GET['ControlPrenatal'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ControlPrenatal the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
                $id_emb='';
		if(isset(yii::app()->user->ultimaHistoria)){
            	$historia=Historia::model()->findByPk(yii::app()->user->ultimaHistoria);
                $id_emb=$historia->getEmbId(); }

		$model=ControlPrenatal::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
                if(!isset(yii::app()->user->ultimaHistoria))
                        throw new CHttpException(403,'Consulte por favor una historia.');
       //         if($model->embarazo_id_emb!=$id_emb)
         //               throw new CHttpException(403,'Consulte por favor un registro de la historia consultada.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ControlPrenatal $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='control-prenatal-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
