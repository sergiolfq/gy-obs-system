<?php

/**
 * This is the model class for table "ant_familiares".
 *
 * The followings are the available columns in table 'ant_familiares':
 * @property integer $id_ant_fam
 * @property integer $alergia
 * @property integer $artritis
 * @property integer $asma
 * @property integer $cancer
 * @property integer $cardiovasculares
 * @property integer $diabetes
 * @property integer $enfermedades_digestivas
 * @property integer $enfermedades_renales
 * @property integer $intoxicacion
 * @property integer $neuromentales
 * @property integer $sifilis
 * @property integer $tbc
 * @property integer $tifoidea
 * @property integer $tosferina
 * @property integer $traumatismo
 * @property integer $vacunaciones
 * @property integer $otros
 * @property string $observaciones
 *
 * The followings are the available model relations:
 * @property Antecedentes[] $antecedentes
 */
class AntFamiliares extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ant_familiares';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('alergia, artritis, asma, cancer, cardiovasculares, diabetes, enfermedades_digestivas, enfermedades_renales, intoxicacion, neuromentales, sifilis, tbc, tifoidea, tosferina, traumatismo, vacunaciones, otros', 'numerical', 'integerOnly'=>true),
			array('observaciones', 'length', 'max'=>45),
			array('observaciones','filter','filter'=>array($obj=new CHtmlPurifier(),'purify')),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ant_fam, alergia, artritis, asma, cancer, cardiovasculares, diabetes, enfermedades_digestivas, enfermedades_renales, intoxicacion, neuromentales, sifilis, tbc, tifoidea, tosferina, traumatismo, vacunaciones, otros, observaciones', 'safe', 'on'=>'search'),
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
			'antecedentes' => array(self::HAS_MANY, 'Antecedentes', 'id_ant_fam'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ant_fam' => 'Id Ant Fam',
			'alergia' => 'Alergia',
			'artritis' => 'Artritis',
			'asma' => 'Asma',
			'cancer' => 'Cancer',
			'cardiovasculares' => 'Cardiovasculares',
			'diabetes' => 'Diabetes',
			'enfermedades_digestivas' => 'Enfermedades Digestivas',
			'enfermedades_renales' => 'Enfermedades Renales',
			'intoxicacion' => 'Intoxicación',
			'neuromentales' => 'Neuromentales',
			'sifilis' => 'Sífilis',
			'tbc' => 'Tbc',
			'tifoidea' => 'Tifoidea',
			'tosferina' => 'Tos ferina',
			'traumatismo' => 'Traumatismo',
			'vacunaciones' => 'Vacunaciones',
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

		$criteria->compare('id_ant_fam',$this->id_ant_fam);
		$criteria->compare('alergia',$this->alergia);
		$criteria->compare('artritis',$this->artritis);
		$criteria->compare('asma',$this->asma);
		$criteria->compare('cancer',$this->cancer);
		$criteria->compare('cardiovasculares',$this->cardiovasculares);
		$criteria->compare('diabetes',$this->diabetes);
		$criteria->compare('enfermedades_digestivas',$this->enfermedades_digestivas);
		$criteria->compare('enfermedades_renales',$this->enfermedades_renales);
		$criteria->compare('intoxicacion',$this->intoxicacion);
		$criteria->compare('neuromentales',$this->neuromentales);
		$criteria->compare('sifilis',$this->sifilis);
		$criteria->compare('tbc',$this->tbc);
		$criteria->compare('tifoidea',$this->tifoidea);
		$criteria->compare('tosferina',$this->tosferina);
		$criteria->compare('traumatismo',$this->traumatismo);
		$criteria->compare('vacunaciones',$this->vacunaciones);
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
	 * @return AntFamiliares the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
