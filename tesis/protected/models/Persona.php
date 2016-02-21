<?php

/**
 * This is the model class for table "persona".
 *
 * The followings are the available columns in table 'persona':
 * @property integer $id_p
 * @property string $nombre
 * @property string $apellido
 * @property string $domicilio
 * @property string $fecha_nac
 * @property integer $id_es
 * @property integer $id_gru
 * @property string $cedula
 * @property integer $telefono
 * @property integer $tlf_eme
 * @property string $correo
 *
 * The followings are the available model relations:
 * @property Historia[] $historias
 * @property Estadocivil $idEs
 * @property Gruposangineo $idGru
 */
class Persona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('telefono, tlf_eme, correo', 'required'),
			array('cedula,fecha_nac,nombre,apellido', 'required'),
			array('cedula', 'unique'),
			array('id_es, id_gru, telefono, tlf_eme', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido, cedula', 'length', 'max'=>20),
			array('nombre, apellido, cedula', 'length', 'max'=>45),
			array('nombre, apellido, domicilio, cedula,correo','filter','filter'=>array($obj=new CHtmlPurifier(),'purify')),
			array('correo', 'length', 'max'=>50),
			array('domicilio','length','max'=>150),
		//	array('fecha_nac', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_p, nombre, apellido, domicilio, fecha_nac, id_es, id_gru, cedula, telefono, tlf_eme, correo', 'safe', 'on'=>'search'),
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
			'historias' => array(self::HAS_MANY, 'Historia', 'id_p'),
			'idEs' => array(self::BELONGS_TO, 'Estadocivil', 'id_es'),
			'idGru' => array(self::BELONGS_TO, 'Gruposangineo', 'id_gru'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_p' => 'Id P',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'domicilio' => 'Domicilio',
			'fecha_nac' => 'Fecha Nacimiento',
			'id_es' => 'Estado Civil',
			'id_gru' => 'Grupo sangíneo',
			'cedula' => 'Cédula',
			'telefono' => 'Teléfono',
			'tlf_eme' => 'Teléfono de Emergencia',
			'correo' => 'Correo',
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

		$criteria->compare('id_p',$this->id_p);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('domicilio',$this->domicilio,true);
		$criteria->compare('fecha_nac',$this->fecha_nac,true);
		$criteria->compare('id_es',$this->id_es);
		$criteria->compare('id_gru',$this->id_gru);
		$criteria->compare('cedula',$this->cedula,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('tlf_eme',$this->tlf_eme);
		$criteria->compare('correo',$this->correo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
/**   retorna la edad actual del paciente
*
*/
       public function getAnt(){

        $his=Historia::model()->find(' id_p = '.$this->id_p);
        //var_dump($his);
      
        $ant=Antecedentes::model()->find('id_ant = '.$his->id_ant);
        yii::app()->user->setState('ant',$ant);
	
       	return $ant;
       }

/*     retorna la historia 
*
*/
     public function getHis(){
        
        $his=Historia::model()->find(' id_p = '.$this->id_p);
        //var_dump($his);
         
       	return $his;
       }

	public function calculaedad(){                     

    	$fechanacimiento=$this->fecha_nac;
    	list($ano,$mes,$dia) = explode("-",$fechanacimiento);
    	$ano_diferencia  = date("Y") - $ano;
    	$mes_diferencia = date("m") - $mes;
    	$dia_diferencia   = date("d") - $dia;
    	if ($dia_diferencia < 0 || $mes_diferencia < 0)
        $ano_diferencia--;
    	return $ano_diferencia;
}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Persona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
