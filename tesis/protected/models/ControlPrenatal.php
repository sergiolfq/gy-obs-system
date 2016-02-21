<?php

/**
 * This is the model class for table "control_prenatal".
 *
 * The followings are the available columns in table 'control_prenatal':
 * @property integer $id_con_pre
 * @property string $fur
 * @property string $eco
 * @property string $ta
 * @property string $p
 * @property string $au
 * @property string $foco
 * @property string $presentacion
 * @property string $ecograma
 * @property string $observaciones
 * @property string $semana
 * @property string $fecha
 * @property integer $embarazo_id_emb
 *
 * The followings are the available model relations:
 * @property Embarazo $embarazoIdEmb
 */
class ControlPrenatal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $ecograma;

	public function tableName()
	{
		return 'control_prenatal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('embarazo_id_emb, semana', 'required'),
			array('embarazo_id_emb', 'numerical', 'integerOnly'=>true),
			array('eco, ta, p, au, foco,ecograma, presentacion,  observaciones, semana','filter','filter'=>array($obj=new CHtmlPurifier(),'purify')),
			array('eco, ta, p, au, foco,ecograma, presentacion,  observaciones, semana', 'length', 'max'=>45),

			array('fur, fecha', 'safe'),
                     //   array('ecograma', 'file', 'types'=>'jpg, gif, png, pdf'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_con_pre, fur, eco, ta, p, au, foco, presentacion, ecograma, observaciones, semana, fecha, embarazo_id_emb', 'safe', 'on'=>'search'),
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
			'embarazoIdEmb' => array(self::BELONGS_TO, 'Embarazo', 'embarazo_id_emb'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_con_pre' => 'Id Con Pre',
			'fur' => 'FUR',
			'eco' => 'Ecograma',
			'ta' => 'Tensión A.',
			'p' => 'Peso',
			'au' => 'Altura U.',
			'foco' => 'Foco',
			'presentacion' => 'Presentación',
			'ecograma' => ' Descripción ecograma',
			'observaciones' => 'Observaciones',
			'semana' => 'Semana',
			'fecha' => 'Fecha',
			'embarazo_id_emb' => 'Embarazo Id Emb',
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
                $id_emb=$historia->getEmbId();                                          //obtiene el id embarazo

		
		$criteria=new CDbCriteria;

		/*$criteria->compare('id_con_pre',$this->id_con_pre);
		$criteria->compare('fur',$this->fur,true);
		$criteria->compare('eco',$this->eco,true);
		$criteria->compare('ta',$this->ta,true);
		$criteria->compare('p',$this->p,true);
		$criteria->compare('au',$this->au,true);
		$criteria->compare('foco',$this->foco,true);
		$criteria->compare('presentacion',$this->presentacion,true);
		$criteria->compare('ecograma',$this->ecograma,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('semana',$this->semana,true);
		$criteria->compare('fecha',$this->fecha,true);*/
		$criteria->compare('embarazo_id_emb',$id_emb);                 // solo aparecen los de este embarazo 
		
		if($id!=null)
		$criteria->addCondition("id_con_pre!=".$id);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


/*esta busqueda devuelve todos los controles prenatales de todos los embarazos que ha tenido esta historia. 
*
*/
	public function searchDefault()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$historia=Historia::model()->findByPk(yii::app()->user->ultimaHistoria);
                $id_emb=$historia->getEmbId();                                          //obtiene el id embarazo


                $ostatuses = Yii::app()->db->createCommand('SELECT id_emb FROM embarazo WHERE historia_id_his='.yii::app()->user->ultimaHistoria)->queryAll();
		$ost=array();
		foreach ($ostatuses as $or) {
		$ost[]=$or['id_emb'];
		}

	      // var_dump($ost);
              // yii::app()->end();
		
		$criteria=new CDbCriteria;

		/*$criteria->compare('id_con_pre',$this->id_con_pre);
		$criteria->compare('fur',$this->fur,true);
		$criteria->compare('eco',$this->eco,true);
		$criteria->compare('ta',$this->ta,true);
		$criteria->compare('p',$this->p,true);
		$criteria->compare('au',$this->au,true);
		$criteria->compare('foco',$this->foco,true);
		$criteria->compare('presentacion',$this->presentacion,true);
		$criteria->compare('ecograma',$this->ecograma,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('semana',$this->semana,true);
		$criteria->compare('fecha',$this->fecha,true);*/
           //  $criteria->with=array('embarazoIdEmb');
			 //$criteria->addSearchCondition('embarazoIdEmb.fecha_inicial',$this->embarazo_id_emb);
			 
	        if(!empty($ost))
		$criteria->compare('embarazo_id_emb',$ost);                 // solo aparecen los de esta historia
                else 
		throw new CHttpException(403,' No ha habido registro de embarazo ni de control prenatal para esta historia.');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}




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
	
	      public function opcionesPresentacion()
	{
          $opciones=array(''=>'nulo','cefalica'=>'Cefálica','podalica'=>'Podálica','transversal'=>'Transversal');
		
            return $opciones;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ControlPrenatal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
