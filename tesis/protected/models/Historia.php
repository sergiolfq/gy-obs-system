<?php

/**
 * This is the model class for table "historia".
 *
 * The followings are the available columns in table 'historia':
 * @property integer $id_his
 * @property integer $id_p
 * @property integer $id_ant
 *
 * The followings are the available model relations:
 * @property Consulta[] $consultas
 * @property Embarazo[] $embarazos
 * @property ExamenFisico[] $examenFisicos
 * @property Antecedentes $idAnt
 * @property Persona $idP
 * @property Recipe[] $recipes
 */
class Historia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'historia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_p, id_ant', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_his, id_p, id_ant', 'safe', 'on'=>'search'),
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
			'consultas' => array(self::HAS_MANY, 'Consulta', 'id_his'),
			'embarazos' => array(self::HAS_MANY, 'Embarazo', 'historia_id_his'),
			'examenFisicos' => array(self::HAS_MANY, 'ExamenFisico', 'id_his'),
			'idAnt' => array(self::BELONGS_TO, 'Antecedentes', 'id_ant'),
			'idP' => array(self::BELONGS_TO, 'Persona', 'id_p'),
			'recipes' => array(self::HAS_MANY, 'Recipe', 'id_his'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_his' => 'Id His',
			'id_p' => 'Id P',
			'id_ant' => 'Id Ant',
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

		$criteria->compare('id_his',$this->id_his);
		$criteria->compare('id_p',$this->id_p);
		$criteria->compare('id_ant',$this->id_ant);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
/** devuelve el enlace de a donde debe ir si ya tiene embarazo  ira a update si no a create 
*
*/
	public function getEmb(){
	$direccion='';
	$list= Yii::app()->db->createCommand('select id_emb from embarazo where estado=1 and historia_id_his='.yii::app()->user->ultimaHistoria)->queryAll();

	//var_dump($list[0]['id_emb']);
	//yii::app()->end();

        if(isset($list[0]['id_emb'])){
            $direccion='embarazo/update/'.$list[0]['id_emb'];
         }
         else {
           $direccion='embarazo/create';
            }
          return $direccion;
        }


	public function getEmbId()
	{
	$id=null;
	$list= Yii::app()->db->createCommand('select id_emb from embarazo where estado=1 and historia_id_his='.yii::app()->user->ultimaHistoria)->queryAll();

          if(isset($list[0]['id_emb'])){
            if($list[0]['id_emb']!=null)
			$id=$list[0]['id_emb'];     
			}    
         else 
           $id=null;

         return $id;
            
	}

/**  agrega en la variable session los links de esa historia
*
*/
	/*public function getAntLinks(){
         $resultado=Antecedentes::model()->

        }  */





	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Historia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
