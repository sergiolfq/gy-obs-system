<?php

/**
 * This is the model class for table "municipio".
 *
 * The followings are the available columns in table 'municipio':
 * @property integer $id_m
 * @property string $nombre_m
 * @property integer $num_pob
 *
 * The followings are the available model relations:
 * @property Persona[] $personas
 */
class Municipio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'municipio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_m, num_pob', 'required'),
			array('num_pob', 'numerical', 'integerOnly'=>true),
			array('nombre_m', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_m, nombre_m, num_pob', 'safe', 'on'=>'search'),
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
			'personas' => array(self::HAS_MANY, 'Persona', 'id_m'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_m' => 'Id M',
			'nombre_m' => 'Nombre M',
			'num_pob' => 'Num Pob',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_m',$this->id_m);
		$criteria->compare('nombre_m',$this->nombre_m,true);
		$criteria->compare('num_pob',$this->num_pob);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Municipio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
