<?php

/**
 * This is the model class for table "esquema_men".
 *
 * The followings are the available columns in table 'esquema_men':
 * @property integer $id_esq
 * @property integer $id_reg
 * @property integer $div1
 * @property integer $div2
 * @property integer $div3
 * @property integer $div4
 * @property integer $div5
 * @property integer $div6
 * @property string $fecha_esq
 * @property string $obs_esq
 * @property string $mes_esq
 *
 * The followings are the available model relations:
 * @property RegistroM $idReg
 */
class EsquemaMen extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'esquema_men';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_reg', 'numerical', 'integerOnly'=>true),
			array('mes_esq,div1, div2, div3, div4, div5, div6', 'length', 'max'=>20),
			array('mes_esq,div1, div2, div3, div4, div5, div6,obs_esq','filter','filter'=>array($obj=new CHtmlPurifier(),'purify')),
			array('fecha_esq, obs_esq', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_esq, id_reg, div1, div2, div3, div4, div5, div6, fecha_esq, obs_esq, mes_esq', 'safe', 'on'=>'search'),
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
			'idReg' => array(self::BELONGS_TO, 'RegistroM', 'id_reg'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_esq' => 'Id Esq',
			'id_reg' => 'Id Reg',
			'div1' => 'Divisi&oacuten 1',
			'div2' => 'Divisi&oacuten 2',
			'div3' => 'Divisi&oacuten 3',
			'div4' => 'Divisi&oacuten 4',
			'div5' => 'Divisi&oacuten 5',
			'div6' => 'Divisi&oacuten 6',
			'fecha_esq' => 'Fecha ',
			'obs_esq' => 'Observaciones',
			'mes_esq' => 'Mes',
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

		$criteria->compare('id_esq',$this->id_esq);
		$criteria->compare('id_reg',$this->id_reg);
		$criteria->compare('id_his',yii::app()->user->ultimaHistoria);
		$criteria->compare('div1',$this->div1);
		$criteria->compare('div2',$this->div2);
		$criteria->compare('div3',$this->div3);
		$criteria->compare('div4',$this->div4);
		$criteria->compare('div5',$this->div5);
		$criteria->compare('div6',$this->div6);
		$criteria->compare('fecha_esq',$this->fecha_esq,true);
		$criteria->compare('obs_esq',$this->obs_esq,true);
		$criteria->compare('mes_esq',$this->mes_esq,true);
                $criteria->group='id_reg';                              //agrupa por id_reg 


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function opciones(){
            $opciones=array(''=>'nulo','hiper'=>'hiper','normal'=>'norm','hipo'=>'hipo');
             return $opciones;
         }


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EsquemaMen the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
