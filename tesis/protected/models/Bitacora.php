<?php

/**
 * This is the model class for table "bitacora".
 *
 * The followings are the available columns in table 'bitacora':
 * @property integer $id_bit
 * @property integer $id_his
 * @property integer $id_u
 * @property string $descripcion_bit
 * @property string $fecha_bit
 *
 * The followings are the available model relations:
 * @property Historia $idHis
 * @property Usuario $idU
 */
class Bitacora extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bitacora';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array(' id_u, descripcion_bit, fecha_bit', 'required'),
			array('id_his, id_u', 'numerical', 'integerOnly'=>true),
			array('descripcion_bit', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_bit, id_his, id_u, descripcion_bit, fecha_bit', 'safe', 'on'=>'search'),
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
			'idHis' => array(self::BELONGS_TO, 'Historia', 'id_his'),
			'idU' => array(self::BELONGS_TO, 'Usuario', 'id_u'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_bit' => 'Id Bit',
			'id_his' => 'Id His',
			'id_u' => 'Id U',
			'descripcion_bit' => 'Descripcion Bit',
			'fecha_bit' => 'Fecha Bit',
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

		$criteria->compare('id_bit',$this->id_bit);
		$criteria->compare('id_his',$this->id_his);
		$criteria->compare('id_u',$this->id_u);
		$criteria->compare('descripcion_bit',$this->descripcion_bit,true);
		$criteria->compare('fecha_bit',$this->fecha_bit,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bitacora the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
