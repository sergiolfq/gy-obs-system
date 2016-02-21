<?php

/**
 * This is the model class for table "examen_fisico".
 *
 * The followings are the available columns in table 'examen_fisico':
 * @property integer $id_exa
 * @property string $fecha
 * @property integer $id_genitales_externos
 * @property integer $id_cuello_uterino
 * @property integer $id_mat
 * @property integer $id_an
 * @property integer $id_par
 * @property integer $id_his
 *
 * The followings are the available model relations:
 * @property Anexo $idAn
 * @property CuelloUterino $idCuelloUterino
 * @property GenitalesExternos $idGenitalesExternos
 * @property Historia $idHis
 * @property Matriz $idMat
 * @property Parametrios $idPar
 */
class ExamenFisico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'examen_fisico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		//	array('id_genitales_externos, id_cuello_uterino, id_mat, id_an, id_par, id_his', 'required'),
			array('id_genitales_externos, id_cuello_uterino, id_mat, id_an, id_par, id_his', 'numerical', 'integerOnly'=>true),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_exa, fecha, id_genitales_externos, id_cuello_uterino, id_mat, id_an, id_par, id_his', 'safe', 'on'=>'search'),
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
			'idAn' => array(self::BELONGS_TO, 'Anexo', 'id_an'),
			'idCuelloUterino' => array(self::BELONGS_TO, 'CuelloUterino', 'id_cuello_uterino'),
			'idGenitalesExternos' => array(self::BELONGS_TO, 'GenitalesExternos', 'id_genitales_externos'),
			'idHis' => array(self::BELONGS_TO, 'Historia', 'id_his'),
			'idMat' => array(self::BELONGS_TO, 'Matriz', 'id_mat'),
			'idPar' => array(self::BELONGS_TO, 'Parametrios', 'id_par'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_exa' => 'Id Exa',
			'fecha' => 'Fecha del examen',
			'id_genitales_externos' => 'Id Genitales Externos',
			'id_cuello_uterino' => 'Id Cuello Uterino',
			'id_mat' => 'Id Mat',
			'id_an' => 'Id An',
			'id_par' => 'Id Par',
			'id_his' => 'Id His',
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

		$criteria->compare('id_exa',$this->id_exa);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('id_genitales_externos',$this->id_genitales_externos);
		$criteria->compare('id_cuello_uterino',$this->id_cuello_uterino);
		$criteria->compare('id_mat',$this->id_mat);
		$criteria->compare('id_an',$this->id_an);
		$criteria->compare('id_par',$this->id_par);
		$criteria->compare('id_his',yii::app()->user->ultimaHistoria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ExamenFisico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
