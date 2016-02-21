<?php

/**
 * This is the model class for table "cuello_uterino".
 *
 * The followings are the available columns in table 'cuello_uterino':
 * @property integer $id_cuello_uterino
 * @property integer $orificio
 * @property integer $flujos
 * @property integer $cervical
 * @property integer $sangre
 * @property integer $cervicitis
 * @property integer $leuroplasia
 * @property integer $polipos
 * @property integer $otros
 * @property string $observaciones
 *
 * The followings are the available model relations:
 * @property ExamenFisico[] $examenFisicos
 */
class CuelloUterino extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cuello_uterino';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('orificio, flujos, cervical, sangre, cervicitis, leuroplasia, polipos, otros', 'numerical', 'integerOnly'=>true),
			array('observaciones', 'length', 'max'=>45),
			array('observaciones','filter','filter'=>array($obj=new CHtmlPurifier(),'purify')),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cuello_uterino, orificio, flujos, cervical, sangre, cervicitis, leuroplasia, polipos, otros, observaciones', 'safe', 'on'=>'search'),
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
			'examenFisicos' => array(self::HAS_MANY, 'ExamenFisico', 'id_cuello_uterino'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cuello_uterino' => 'Id Cuello Uterino',
			'orificio' => 'Orificio',
			'flujos' => 'Flujos',
			'cervical' => 'Moco cervical',
			'sangre' => 'Sangre',
			'cervicitis' => 'Cervicitis',
			'leuroplasia' => 'Leucoplasia',
			'polipos' => 'Pólipos',
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

		$criteria->compare('id_cuello_uterino',$this->id_cuello_uterino);
		$criteria->compare('orificio',$this->orificio);
		$criteria->compare('flujos',$this->flujos);
		$criteria->compare('cervical',$this->cervical);
		$criteria->compare('sangre',$this->sangre);
		$criteria->compare('cervicitis',$this->cervicitis);
		$criteria->compare('leuroplasia',$this->leuroplasia);
		$criteria->compare('polipos',$this->polipos);
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
	 * @return CuelloUterino the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
