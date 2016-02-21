<?php

/**
 * This is the model class for table "parametrios".
 *
 * The followings are the available columns in table 'parametrios':
 * @property integer $id_par
 * @property integer $induracion
 * @property integer $tumores
 * @property integer $otros
 * @property string $observaciones
 *
 * The followings are the available model relations:
 * @property ExamenFisico[] $examenFisicos
 */
class Parametrios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'parametrios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('induracion, tumores, otros', 'numerical', 'integerOnly'=>true),
			array('observaciones', 'length', 'max'=>45),
			array('observaciones','filter','filter'=>array($obj=new CHtmlPurifier(),'purify')),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_par, induracion, tumores, otros, observaciones', 'safe', 'on'=>'search'),
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
			'examenFisicos' => array(self::HAS_MANY, 'ExamenFisico', 'id_par'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_par' => 'Id Par',
			'induracion' => 'Induración',
			'tumores' => 'Tumores',
			'otros' => 'Otros',
			'observaciones' => 'Observaciones',
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

		$criteria->compare('id_par',$this->id_par);
		$criteria->compare('induracion',$this->induracion);
		$criteria->compare('tumores',$this->tumores);
		$criteria->compare('otros',$this->otros);
		$criteria->compare('observaciones',$this->observaciones,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Parametrios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
