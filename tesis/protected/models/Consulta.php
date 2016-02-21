<?php

/**
 * This is the model class for table "consulta".
 *
 * The followings are the available columns in table 'consulta':
 * @property integer $id_con
 * @property string $fecha_con
 * @property integer $id_mot
 * @property integer $id_his
 * @property integer $id_u
 *
 * The followings are the available model relations:
 * @property Historia $idHis
 * @property Motivo $idMot
 * @property Usuario $idU
 */
class Consulta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'consulta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_con, id_his, id_u', 'required'),
			array('id_mot, id_his, id_u', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_con, fecha_con, id_mot, id_his, id_u', 'safe', 'on'=>'search'),
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
			'idMot' => array(self::BELONGS_TO, 'Motivo', 'id_mot'),
			'idU' => array(self::BELONGS_TO, 'Usuario', 'id_u'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_con' => 'Id Con',
			'fecha_con' => 'Fecha Con',
			'id_mot' => 'Id Mot',
			'id_his' => 'Id His',
			'id_u' => 'Id U',
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

		$criteria->compare('id_con',$this->id_con);
		$criteria->compare('fecha_con',$this->fecha_con,true);
		$criteria->compare('id_mot',$this->id_mot);
		$criteria->compare('id_his',$this->id_his);
		$criteria->compare('id_u',$this->id_u);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Consulta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
