<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id_u
 * @property string $name
 * @property string $password
 * @property integer $rol
 * @property string $nombre
 * @property string $apellido
 * @property string $ci
 * @property string $registro
 *
 * The followings are the available model relations:
 * @property Consulta[] $consultas
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		//	array('name, password', 'required'),
			array('name', 'unique'),
			array('rol', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>20),
			array('password', 'length', 'max'=>50),
			array('nombre, apellido, ci, registro', 'length', 'max'=>45),
			array('name,password,nombre, apellido, ci, registro','filter','filter'=>array($obj=new CHtmlPurifier(),'purify')),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_u, name, password, rol, nombre, apellido, ci, registro', 'safe', 'on'=>'search'),
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
			'consultas' => array(self::HAS_MANY, 'Consulta', 'id_u'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_u' => 'Id U',
			'name' => 'Username',
			'password' => 'Password',
			'rol' => 'Rol',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'ci' => 'CI',
			'registro' => 'Registro',
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

		$criteria->compare('id_u',$this->id_u);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('rol',$this->rol);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('ci',$this->ci,true);
		$criteria->compare('registro',$this->registro,true);
    		$criteria->addCondition("id_u!=".Yii::app()->user->id_u);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function listarUsuarios(){
        
        $modelos=$this->findAll();
        $lista='<select id="usuario" name="usuario"> <option value="-1"> Todos los tratantes  </option>';
        
	foreach($modelos as $data){
        $lista.='<option value='.$data->id_u.'> '.$data->nombre.' '.$data->apellido.' </option>';            
        }

         $lista.=' </select>';
         return $lista;
        }



	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
