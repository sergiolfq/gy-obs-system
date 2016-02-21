<?php

/**
 * This is the model class for table "antecedentes".
 *
 * The followings are the available columns in table 'antecedentes':
 * @property integer $id_ant
 * @property integer $id_ant_per
 * @property integer $id_ant_fam
 * @property integer $id_hab
 *
 * The followings are the available model relations:
 * @property AntObstetricos[] $antObstetricoses
 * @property AntFamiliares $idAntFam
 * @property AntPersonales $idAntPer
 * @property HabPsicobio $idHab
 * @property Historia[] $historias
 */
class Antecedentes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'antecedentes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_ant_per, id_ant_fam, id_hab', 'required'),
			array('id_ant_per, id_ant_fam, id_hab', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ant, id_ant_per, id_ant_fam, id_hab', 'safe', 'on'=>'search'),
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
			'antObstetricoses' => array(self::HAS_MANY, 'AntObstetricos', 'id_ant'),
			'idAntFam' => array(self::BELONGS_TO, 'AntFamiliares', 'id_ant_fam'),
			'idAntPer' => array(self::BELONGS_TO, 'AntPersonales', 'id_ant_per'),
			'idHab' => array(self::BELONGS_TO, 'HabPsicobio', 'id_hab'),
			'historias' => array(self::HAS_MANY, 'Historia', 'id_ant'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ant' => 'Id Ant',
			'id_ant_per' => 'Id Ant Per',
			'id_ant_fam' => 'Id Ant Fam',
			'id_hab' => 'Id Hab',
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

		$criteria->compare('id_ant',$this->id_ant);
		$criteria->compare('id_ant_per',$this->id_ant_per);
		$criteria->compare('id_ant_fam',$this->id_ant_fam);
		$criteria->compare('id_hab',$this->id_hab);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Antecedentes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
