<?php

/**
 * This is the model class for table "archivo".
 *
 * The followings are the available columns in table 'archivo':
 * @property integer $id_arch
 * @property string $nombre
 * @property string $descripcion
 * @property string $fecha
 * @property integer $id_h
 *
 * The followings are the available model relations:
 * @property Historia $idH
 */
class Archivo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
      public $nombre; 

	public function tableName()
	{
		return 'archivo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(

			array('descripcion, fecha, id_h', 'required'),
			array('id_h', 'numerical', 'integerOnly'=>true),
                        array('nombre', 'file', 'types'=>'jpg, gif, png, pdf'),
			array('descripcion','filter','filter'=>array($obj=new CHtmlPurifier(),'purify')),
			array('descripcion', 'length', 'max'=>100),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_arch, nombre, descripcion, fecha, id_h', 'safe', 'on'=>'search'),
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
			'idH' => array(self::BELONGS_TO, 'Historia', 'id_h'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_arch' => 'Id Arch',
			'nombre' => 'Archivo',
			'descripcion' => 'Descripci&oacuten',
			'fecha' => 'Fecha',
			'id_h' => 'Id H',
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
	public function search($id=null)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

                $criteria->join='LEFT JOIN historia  ON  historia.id_his = t.id_h';   
		$criteria->condition='t.id_h= :value ';
		$criteria->params=array(':value'=>yii::app()->user->ultimaHistoria);
	/*	$criteria->compare('id_arch',$this->id_arch);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('fecha',$this->fecha,true);  */
		//$criteria->compare('id_h',yii::app()->user->ultimaHistoria);

		if($id!=null)
		$criteria->addCondition("id_arch!=".$id);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Archivo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
