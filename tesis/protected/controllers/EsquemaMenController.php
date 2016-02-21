<?php

class EsquemaMenController extends Controller
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
				'actions'=>array('view'),
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
	
		//$model=$this->loadModel($id);
                 // $model->find();
              if(isset(yii::app()->user->ultimaHistoria))
              {  
                $b=RegistroM::model()->findByPK($id);   //obtengo el registro
                $esq=EsquemaMen::model()->findAll(' id_reg = '.$id);
   
		$a_1=0;
		//$a_1=new EsquemaMen;
		$a_2=new EsquemaMen;
		$a_3=new EsquemaMen;
		$a_4=new EsquemaMen;
                $i=1;

         
             	foreach($esq as $item){       //asignamos los registros de esquema menstrual  a los objetos de la forma 
                 ${'a_'.$i}=$item;      

		 $i++;
		}

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EsquemaMen']))
               		{
			$a_1->attributes=$_POST['EsquemaMen'][1];
			$a_2->attributes=$_POST['EsquemaMen'][2];
			$a_3->attributes=$_POST['EsquemaMen'][3];
			$a_4->attributes=$_POST['EsquemaMen'][4];	                 

			$a_1->id_reg=$b->id_reg;
			$a_2->id_reg=$b->id_reg;
			$a_3->id_reg=$b->id_reg;
			$a_4->id_reg=$b->id_reg;

			$a_1->id_his=yii::app()->user->ultimaHistoria;
			$a_2->id_his=yii::app()->user->ultimaHistoria;
			$a_3->id_his=yii::app()->user->ultimaHistoria;
			$a_4->id_his=yii::app()->user->ultimaHistoria;


			if($a_1->save()&&$a_2->save()&&$a_3->save()&&$a_4->save()){


			$bit= new Bitacora;					// se agrega a la bitacora 
                	$bit->id_his=yii::app()->user->ultimaHistoria;
			$bit->id_u=yii::app()->user->id_u;
			$bit->descripcion_bit="se actualizo esquema menstrual ";
                	$bit->fecha_bit=date('Y-m-d');
                	$bit->save();

                                Yii::app()->user->setFlash('success', "Esquema menstrual guardado Exitosamente");
				$this->redirect(array('historia/update','id'=>yii::app()->user->ultimaHistoria));  }
		}

		$this->render('view',array(
			'a_1'=>$a_1,'a_2'=>$a_2,'a_3'=>$a_3,'a_4'=>$a_4
		));



          }// fin del if de la variable de session ultimaHistoria
            else 
                 throw new CHttpException(403,'Por favor consulte una historia.'); 
	
		
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{   
            if(isset(yii::app()->user->ultimaHistoria))      //valido que tengo una historia consultada 
             {
                                       //Hacer validacion 

		$a_1=new EsquemaMen;
		$a_2=new EsquemaMen;
		$a_3=new EsquemaMen;
		$a_4=new EsquemaMen;

      
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EsquemaMen']))
		{

                	$b= new RegistroM;
                	//$b->id_his=yii::app()->user->ultimaHistoria;
                	$b->fecha_reg=date('Y-m-d');
                	$b->save($b->fecha_reg);

                     //   var_dump($b->errors);
	              //  yii::app()->end();

			$a_1->attributes=$_POST['EsquemaMen'][1];
			$a_2->attributes=$_POST['EsquemaMen'][2];
			$a_3->attributes=$_POST['EsquemaMen'][3];
			$a_4->attributes=$_POST['EsquemaMen'][4];

                        $a_1->id_reg=$b->id_reg;
			$a_2->id_reg=$b->id_reg;
			$a_3->id_reg=$b->id_reg;
			$a_4->id_reg=$b->id_reg;
                        
                        $a_1->id_his=yii::app()->user->ultimaHistoria;
			$a_2->id_his=yii::app()->user->ultimaHistoria;
			$a_3->id_his=yii::app()->user->ultimaHistoria;
			$a_4->id_his=yii::app()->user->ultimaHistoria;




			if($a_1->save()&&$a_2->save()&&$a_3->save()&&$a_4->save()){

			$bit= new Bitacora;					// se agrega a la bitacora 
                	$bit->id_his=yii::app()->user->ultimaHistoria;
			$bit->id_u=yii::app()->user->id_u;
			$bit->descripcion_bit="se creo esquema menstrual ";
                	$bit->fecha_bit=date('Y-m-d');
                	$bit->save();

		               	Yii::app()->user->setFlash('success', "Esquema menstrual creado Exitosamente");
				$this->redirect(array('historia/update','id'=>yii::app()->user->ultimaHistoria)); 
 			 }
		}

		$this->render('create',array('a_1'=>$a_1, 'a_2'=>$a_2,'a_3'=>$a_3,'a_4'=>$a_4));
            }
	      else 
                    throw new CHttpException(403,'Por favor consulte una historia.'); 
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		//$model=$this->loadModel($id);
                 // $model->find();
              if(isset(yii::app()->user->ultimaHistoria))
              {  
                $b=RegistroM::model()->findByPK($id);   //obtengo el registro
                $esq=EsquemaMen::model()->findAll(' id_reg = '.$id);
   
		$a_1=0;
		//$a_1=new EsquemaMen;
		$a_2=new EsquemaMen;
		$a_3=new EsquemaMen;
		$a_4=new EsquemaMen;
                $i=1;

         
             	foreach($esq as $item){       //asignamos los registros de esquema menstrual  a los objetos de la forma 
                 ${'a_'.$i}=$item;      

		 $i++;
		}

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EsquemaMen']))
               		{
			$a_1->attributes=$_POST['EsquemaMen'][1];
			$a_2->attributes=$_POST['EsquemaMen'][2];
			$a_3->attributes=$_POST['EsquemaMen'][3];
			$a_4->attributes=$_POST['EsquemaMen'][4];	                 

			$a_1->id_reg=$b->id_reg;
			$a_2->id_reg=$b->id_reg;
			$a_3->id_reg=$b->id_reg;
			$a_4->id_reg=$b->id_reg;

			$a_1->id_his=yii::app()->user->ultimaHistoria;
			$a_2->id_his=yii::app()->user->ultimaHistoria;
			$a_3->id_his=yii::app()->user->ultimaHistoria;
			$a_4->id_his=yii::app()->user->ultimaHistoria;


			if($a_1->save()&&$a_2->save()&&$a_3->save()&&$a_4->save()){


			$bit= new Bitacora;					// se agrega a la bitacora 
                	$bit->id_his=yii::app()->user->ultimaHistoria;
			$bit->id_u=yii::app()->user->id_u;
			$bit->descripcion_bit="se actualizo esquema menstrual ";
                	$bit->fecha_bit=date('Y-m-d');
                	$bit->save();

                                Yii::app()->user->setFlash('success', "Esquema menstrual guardado Exitosamente");
				$this->redirect(array('historia/update','id'=>yii::app()->user->ultimaHistoria));  }
		}

		$this->render('update',array(
			'a_1'=>$a_1,'a_2'=>$a_2,'a_3'=>$a_3,'a_4'=>$a_4
		));



          }// fin del if de la variable de session ultimaHistoria
            else 
                 throw new CHttpException(403,'Por favor consulte una historia.'); 
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		//$this->loadModel($id)->delete(); primero se borra todolos esquemas y luego el registro  
		$esquema=EsquemaMen::model()->deleteAll(' id_reg = '.$id);    // se borran los esquemas                  
		$registro=RegistroM::model()->find($id);
                $registro->delete(); 


		$bit= new Bitacora;					// se agrega a la bitacora 
                $bit->id_his=yii::app()->user->ultimaHistoria;
		$bit->id_u=yii::app()->user->id_u;
		$bit->descripcion_bit="se elimino esquema menstrual ";
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
		$dataProvider=new CActiveDataProvider('EsquemaMen');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new EsquemaMen('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['EsquemaMen']))
			$model->attributes=$_GET['EsquemaMen'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return EsquemaMen the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=EsquemaMen::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param EsquemaMen $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='esquema-men-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
