<?php

/**
 * This is the model class for table "matriz".
 *
 * The followings are the available columns in table 'matriz':
 * @property integer $id_mat
 * @property integer $caracteres
 * @property integer $posicion
 * @property integer $tamano
 * @property integer $tumoraciones
 * @property integer $otros
 * @property string $observaciones
 *
 * The followings are the available model relations:
 * @property ExamenFisico[] $examenFisicos
 */
class Matriz extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'matriz';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('caracteres, posicion, tamano, tumoraciones, otros', 'numerical', 'integerOnly'=>true),
			array('observaciones', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_mat, caracteres, posicion, tamano, tumoraciones, otros, observaciones', 'safe', 'on'=>'search'),
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
			'examenFisicos' => array(self::HAS_MANY, 'ExamenFisico', 'id_mat'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_mat' => 'Id Mat',
			'caracteres' => 'Caracteres',
			'posicion' => 'Posición',
			'tamano' => 'Tamaño',
			'tumoraciones' => 'Tumoraciones',
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

		$criteria->compare('id_mat',$this->id_mat);
		$criteria->compare('caracteres',$this->caracteres);
		$criteria->compare('posicion',$this->posicion);
		$criteria->compare('tamano',$this->tamano);
		$criteria->compare('tumoraciones',$this->tumoraciones);
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
	 * @return Matriz the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
