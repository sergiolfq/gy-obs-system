<?php

/**
 * This is the model class for table "control_postnatal".
 *
 * The followings are the available columns in table 'control_postnatal':
 * @property integer $id_cont_post
 * @property integer $id_emb
 * @property string $peso
 * @property string $tension
 * @property string $involucion
 * @property string $herida_qui
 * @property string $epiciotomia
 * @property string $sangrado_gen
 * @property string $edema_mien_inf
 * @property string $anticoceptivo
 * @property string $observaciones_con
 *
 * The followings are the available model relations:
 * @property Embarazo $idEmb
 */
class ControlPostnatal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'control_postnatal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_emb, observaciones_con', 'required'),
			array('id_emb', 'numerical', 'integerOnly'=>true),
			array('peso, tension, involucion, herida_qui, epiciotomia, sangrado_gen, edema_mien_inf, anticoceptivo', 'length', 'max'=>25),
			array('observaciones_con', 'length', 'max'=>500),
			array('observaciones_con','filter','filter'=>array($obj=new CHtmlPurifier(),'purify')),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cont_post, id_emb, peso, tension, involucion, herida_qui, epiciotomia, sangrado_gen, edema_mien_inf, anticoceptivo, observaciones_con', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idEmb' => array(self::BELONGS_TO, 'Embarazo', 'id_emb'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cont_post' => 'Id Cont Post',
			'id_emb' => 'Id Emb',
			'peso' => 'Peso',
			'tension' => 'Tensión Arterilial' ,
			'involucion' => 'Involución',
			'herida_qui' => 'Herida Quirúrgica',
			'epiciotomia' => 'Episiotomia',
			'sangrado_gen' => 'Sangrado genital',
			'edema_mien_inf' => 'Edema miembros inferiores',
			'anticoceptivo' => 'Anticonceptivo',
			'observaciones_con' => 'Observaciones',
            'fecha_con_pos' => 'fecha',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search($id=null)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$historia=Historia::model()->findByPk(yii::app()->user->ultimaHistoria);
                $id_emb=$historia->getEmbId(); 

		$criteria=new CDbCriteria;

		//$criteria->compare('id_cont_post',$this->id_cont_post);
		$criteria->compare('id_emb',$id_emb);
	/*	$criteria->compare('peso',$this->peso,true);
		$criteria->compare('tension',$this->tension,true);
		$criteria->compare('involucion',$this->involucion,true);
		$criteria->compare('herida_qui',$this->herida_qui,true);
		$criteria->compare('epiciotomia',$this->epiciotomia,true);
		$criteria->compare('sangrado_gen',$this->sangrado_gen,true);
		$criteria->compare('edema_mien_inf',$this->edema_mien_inf,true);
		$criteria->compare('anticoceptivo',$this->anticoceptivo,true);
		$criteria->compare('observaciones_con',$this->observaciones_con,true);*/
		if($id!=null)
		$criteria->addCondition("id_cont_post!=".$id);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


/*esta busqueda devuelve todos los controles postnatales de todos los embarazos que ha tenido esta historia. 
*
*/
	public function searchDefault()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$historia=Historia::model()->findByPk(yii::app()->user->ultimaHistoria);
                $id_emb=$historia->getEmbId(); 

		$ostatuses = Yii::app()->db->createCommand('SELECT id_emb FROM embarazo WHERE historia_id_his='.yii::app()->user->ultimaHistoria)->queryAll();
		$ost=array();
		foreach ($ostatuses as $or) {
		$ost[]=$or['id_emb'];
		}
         //       var_dump($ost);
         //       yii::app()->end();

		$criteria=new CDbCriteria;
		
		 //$criteria->with=array('idEmb');
		 //$criteria->addSearchCondition('idEmb.fecha_inicial',$this->id_emb);
		/*
		$criteria->with=array('idEmb');
		$criteria->addSearchCondition('idEmb.fecha_inicial',$this->id_emb);
		*/

		//$criteria->compare('id_cont_post',$this->id_cont_post);
		$criteria->compare('id_emb',$ost);
		/*$criteria->compare('peso',$this->peso,true);
		$criteria->compare('tension',$this->tension,true);
		$criteria->compare('involucion',$this->involucion,true);
		$criteria->compare('herida_qui',$this->herida_qui,true);
		$criteria->compare('epiciotomia',$this->epiciotomia,true);
		$criteria->compare('sangrado_gen',$this->sangrado_gen,true);
		$criteria->compare('edema_mien_inf',$this->edema_mien_inf,true);
		$criteria->compare('anticoceptivo',$this->anticoceptivo,true);
		$criteria->compare('observaciones_con',$this->observaciones_con,true);*/
	
	        if(!empty($ost))
				$criteria->compare('id_emb',$ost);                 // solo aparecen los de este embarazo 
                else 
		throw new CHttpException(403,' No ha habido registro de embarazos ni de control para esta historia.');
		
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}




/** opciones para campos del modelo
*
*/
        public function opciones()
	{
          $opciones=array(''=>'nulo','Si'=>'Si','No'=>'No');
		
            return $opciones;
	}

      public function opcionesNormal()
	{
          $opciones=array(''=>'nulo','normal'=>'normal','anormal'=>'anormal');
		
            return $opciones;
	}


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ControlPostnatal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
