<?php

/**
 * This is the model class for table "registro_m".
 *
 * The followings are the available columns in table 'registro_m':
 * @property integer $id_reg
 * @property integer $id_his
 * @property string $fecha_reg
 *
 * The followings are the available model relations:
 * @property EsquemaMen[] $esquemaMens
 * @property Historia $idHis
 */
class RegistroM extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'registro_m';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array(' fecha_reg', 'required'),
		//	array('id_his', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_reg, fecha_reg', 'safe', 'on'=>'search'),
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
			'esquemaMens' => array(self::HAS_MANY, 'EsquemaMen', 'id_reg'),
			//'idHis' => array(self::BELONGS_TO, 'Historia', 'id_his'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_reg' => 'Id Reg',
			//'id_his' => 'Id His',
			'fecha_reg' => 'Fecha Reg',
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

		$criteria->compare('id_reg',$this->id_reg);
	//	$criteria->compare('id_his',$this->id_his);
		$criteria->compare('fecha_reg',$this->fecha_reg,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RegistroM the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
