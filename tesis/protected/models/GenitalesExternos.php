<?php

/**
 * This is the model class for table "genitales_externos".
 *
 * The followings are the available columns in table 'genitales_externos':
 * @property integer $id_genitales_externos
 * @property integer $labios
 * @property integer $g_bartholine
 * @property integer $g_skane
 * @property integer $meato_uretral
 * @property integer $himen
 * @property integer $perine
 * @property integer $vagina
 * @property integer $inspeccion_esfuerzo
 * @property integer $otros
 * @property string $observaciones
 *
 * The followings are the available model relations:
 * @property ExamenFisico[] $examenFisicos
 */
class GenitalesExternos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'genitales_externos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('labios, g_bartholine, g_skane, meato_uretral, himen, perine, vagina, inspeccion_esfuerzo, otros', 'numerical', 'integerOnly'=>true),
			array('observaciones', 'length', 'max'=>45),
			array('observaciones','filter','filter'=>array($obj=new CHtmlPurifier(),'purify')),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_genitales_externos, labios, g_bartholine, g_skane, meato_uretral, himen, perine, vagina, inspeccion_esfuerzo, otros, observaciones', 'safe', 'on'=>'search'),
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
			'examenFisicos' => array(self::HAS_MANY, 'ExamenFisico', 'id_genitales_externos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_genitales_externos' => 'Id Genitales Externos',
			'labios' => 'Labios',
			'g_bartholine' => 'G Bartholine',
			'g_skane' => 'G Skene',
			'meato_uretral' => 'Meato Uretral',
			'himen' => 'Himen',
			'perine' => 'Perine',
			'vagina' => 'Vagina',
			'inspeccion_esfuerzo' => 'Inspección del Esfuerzo',
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

		$criteria->compare('id_genitales_externos',$this->id_genitales_externos);
		$criteria->compare('labios',$this->labios);
		$criteria->compare('g_bartholine',$this->g_bartholine);
		$criteria->compare('g_skane',$this->g_skane);
		$criteria->compare('meato_uretral',$this->meato_uretral);
		$criteria->compare('himen',$this->himen);
		$criteria->compare('perine',$this->perine);
		$criteria->compare('vagina',$this->vagina);
		$criteria->compare('inspeccion_esfuerzo',$this->inspeccion_esfuerzo);
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
	 * @return GenitalesExternos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
