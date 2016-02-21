<?php

/**
 * This is the model class for table "ant_obstetricos".
 *
 * The followings are the available columns in table 'ant_obstetricos':
 * @property integer $id_ant_obs
 * @property integer $anyo
 * @property string $tipo_parto
 * @property string $tiempo_trabajo
 * @property string $hemorragia
 * @property string $lesion_perinial
 * @property string $toxemia
 * @property string $puerperio
 * @property double $peso_nino
 * @property integer $vivo
 * @property string $sexo
 * @property integer $id_ant
 *
 * The followings are the available model relations:
 * @property Antecedentes $idAnt
 */
class AntObstetricos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ant_obstetricos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_ant,sexo,anyo,vivo', 'required'),
			array('anyo, id_ant', 'numerical', 'integerOnly'=>true),
			array('peso_nino', 'numerical'),
			array('tipo_parto', 'length', 'max'=>45),
			array('tiempo_trabajo, sexo,tipo_parto ','filter','filter'=>array($obj=new CHtmlPurifier(),'purify')),
			array('tiempo_trabajo, sexo', 'length', 'max'=>11),
			array('hemorragia, lesion_perinial,vivo, toxemia, puerperio', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ant_obs, anyo, tipo_parto, tiempo_trabajo, hemorragia, lesion_perinial, toxemia, puerperio, peso_nino, vivo, sexo, id_ant', 'safe', 'on'=>'search'),
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
			'idAnt' => array(self::BELONGS_TO, 'Antecedentes', 'id_ant'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ant_obs' => 'Id Ant Obs',
			'anyo' => 'Año',
			'tipo_parto' => 'Tipo de Parto',
			'tiempo_trabajo' => 'Tiempo de Trabajo',
			'hemorragia' => 'Hemorragia',
			'lesion_perinial' => 'Lesión Perineal',
			'toxemia' => 'Toxemia',
			'puerperio' => 'Puerperio',
			'peso_nino' => 'Peso niño',
			'vivo' => 'Vivo',
			'sexo' => 'Sexo',
			'id_ant' => 'Id Ant',
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
	public function search($id_ant_obs=null)  //  esta condicon solo permite visualizar los antecedentes obstetricos de una persona
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		/*$criteria->compare('id_ant_obs',$this->id_ant_obs);
		$criteria->compare('anyo',$this->anyo);
		$criteria->compare('tipo_parto',$this->tipo_parto,true);
		$criteria->compare('tiempo_trabajo',$this->tiempo_trabajo,true);
		$criteria->compare('hemorragia',$this->hemorragia,true);
		$criteria->compare('lesion_perinial',$this->lesion_perinial,true);
		$criteria->compare('toxemia',$this->toxemia,true);
		$criteria->compare('puerperio',$this->puerperio,true);
		$criteria->compare('peso_nino',$this->peso_nino);
		$criteria->compare('vivo',$this->vivo);
		$criteria->compare('sexo',$this->sexo,true);*/
                $ant=Historia::model()->findByPk(yii::app()->user->ultimaHistoria)->id_ant;  //consigo antecedente
		$criteria->compare('id_ant',$ant);

                if($id_ant_obs!=null)
                $criteria->addCondition("id_ant_obs!=".$id_ant_obs);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}




 	public function sexo(){
           $options = array('M'=>'M','F'=>'F');
         return $options;
	}

        public function parto(){
           $options = array(''=>'nulo','Eutócico'=>'Eutócico','Distócico'=>'Distócico');
         return $options;
        }

 	public function vivo(){
           $options = array('Si'=>'Sí','No'=>'No');
         return $options;
        }



	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AntObstetricos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
