<?php

/**
 * This is the model class for table "embarazo".
 *
 * The followings are the available columns in table 'embarazo':
 * @property integer $id_emb
 * @property string $peso_anterior
 * @property string $talla
 * @property string $fum
 * @property integer $exam_cli_hom
 * @property integer $examen_mama
 * @property integer $examen_odo
 * @property integer $pelvis
 * @property integer $papanicolau
 * @property integer $colposcopia
 * @property integer $examen_clini_cervix
 * @property integer $vdrl
 * @property string $fecha_vdrl
 * @property integer $hb
 * @property string $fecha_hb
 * @property string $observaciones
 * @property string $tipo_parto
 * @property string $hora
 * @property string $fecha_final
 * @property string $muerte_fetal
 * @property string $sexo
 * @property string $peso
 * @property string $vdrl_em
 * @property string $talla_final
 * @property string $fecha_inicial
 * @property integer $historia_id_his
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property ControlPrenatal[] $controlPrenatals
 * @property Historia $historiaIdHis
 */
class Embarazo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'embarazo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('historia_id_his, estado,fecha_inicial', 'required'),
			array('exam_cli_hom, examen_mama, examen_odo, pelvis, papanicolau, colposcopia, examen_clini_cervix, vdrl, hb, historia_id_his, estado', 'numerical', 'integerOnly'=>true),

			array('peso_anterior, talla, observaciones, tipo_parto, hora, fecha_final, muerte_fetal, sexo, peso, vdrl_em, talla_final, fecha_inicial','filter','filter'=>array($obj=new CHtmlPurifier(),'purify')),
	

			array('peso_anterior, talla, observaciones, tipo_parto, hora, fecha_final, muerte_fetal, sexo, peso, vdrl_em, talla_final, fecha_inicial', 'length', 'max'=>45),
			array('fum, fecha_vdrl, fecha_hb', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_emb, peso_anterior, talla, fum, exam_cli_hom, examen_mama, examen_odo, pelvis, papanicolau, colposcopia, examen_clini_cervix, vdrl, fecha_vdrl, hb, fecha_hb, observaciones, tipo_parto, hora, fecha_final, muerte_fetal, sexo, peso, vdrl_em, talla_final, fecha_inicial, historia_id_his, estado', 'safe', 'on'=>'search'),
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
			'controlPrenatals' => array(self::HAS_MANY, 'ControlPrenatal', 'embarazo_id_emb'),
			'historiaIdHis' => array(self::BELONGS_TO, 'Historia', 'historia_id_his'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_emb' => 'Id Emb',
			'peso_anterior' => 'Peso inicial',
			'talla' => 'Talla',
			'fum' => 'FUM',
			'exam_cli_hom' => 'Ex. Clinico',
			'examen_mama' => 'Ex. Mamas',
			'examen_odo' => 'Ex. Odon',
			'pelvis' => 'Pelvis',
			'papanicolau' => 'Papanicolau',
			'colposcopia' => 'Colposcopia',
			'examen_clini_cervix' => 'Ex. Clínico Cérvix',
			'vdrl' => 'Vdrl',
			'fecha_vdrl' => 'Fecha Vdrl',
			'hb' => 'Hb',
			'fecha_hb' => 'Fecha Hb',
			'observaciones' => 'Observaciones',
			'tipo_parto' => 'Tipo Parto',
			'hora' => 'Hora',
			'fecha_final' => 'Fecha Final',
			'muerte_fetal' => 'Muerte Fetal',
			'sexo' => 'Sexo',
			'peso' => 'Peso',
			'vdrl_em' => 'Vdrl Embrión',
			'talla_final' => 'Talla Final',
			'fecha_inicial' => 'Fecha Inicial',
			'historia_id_his' => 'Historia Id His',
			'estado' => 'Estado',
			'fpp' => 'FPP',
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

	/*	$criteria->compare('id_emb',$this->id_emb);
		$criteria->compare('peso_anterior',$this->peso_anterior,true);
		$criteria->compare('talla',$this->talla,true);
		$criteria->compare('fum',$this->fum,true);
		$criteria->compare('exam_cli_hom',$this->exam_cli_hom);
		$criteria->compare('examen_mama',$this->examen_mama);
		$criteria->compare('examen_odo',$this->examen_odo);
		$criteria->compare('pelvis',$this->pelvis);
		$criteria->compare('papanicolau',$this->papanicolau);
		$criteria->compare('colposcopia',$this->colposcopia);
		$criteria->compare('examen_clini_cervix',$this->examen_clini_cervix);
		$criteria->compare('vdrl',$this->vdrl);
		$criteria->compare('fecha_vdrl',$this->fecha_vdrl,true);
		$criteria->compare('hb',$this->hb);
		$criteria->compare('fecha_hb',$this->fecha_hb,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('tipo_parto',$this->tipo_parto,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('fecha_final',$this->fecha_final,true);
		$criteria->compare('muerte_fetal',$this->muerte_fetal,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('peso',$this->peso,true);
		$criteria->compare('vdrl_em',$this->vdrl_em,true);
		$criteria->compare('talla_final',$this->talla_final,true);
		$criteria->compare('fecha_inicial',$this->fecha_inicial,true);*/
		$criteria->compare('historia_id_his',yii::app()->user->ultimaHistoria);
//		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

public function searchAll()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

	/*	$criteria->compare('id_emb',$this->id_emb);
		$criteria->compare('peso_anterior',$this->peso_anterior,true);
		$criteria->compare('talla',$this->talla,true);
		$criteria->compare('fum',$this->fum,true);
		$criteria->compare('exam_cli_hom',$this->exam_cli_hom);
		$criteria->compare('examen_mama',$this->examen_mama);
		$criteria->compare('examen_odo',$this->examen_odo);
		$criteria->compare('pelvis',$this->pelvis);
		$criteria->compare('papanicolau',$this->papanicolau);
		$criteria->compare('colposcopia',$this->colposcopia);
		$criteria->compare('examen_clini_cervix',$this->examen_clini_cervix);
		$criteria->compare('vdrl',$this->vdrl);
		$criteria->compare('fecha_vdrl',$this->fecha_vdrl,true);
		$criteria->compare('hb',$this->hb);
		$criteria->compare('fecha_hb',$this->fecha_hb,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('tipo_parto',$this->tipo_parto,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('fecha_final',$this->fecha_final,true);
		$criteria->compare('muerte_fetal',$this->muerte_fetal,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('peso',$this->peso,true);
		$criteria->compare('vdrl_em',$this->vdrl_em,true);
		$criteria->compare('talla_final',$this->talla_final,true);
		$criteria->compare('fecha_inicial',$this->fecha_inicial,true);*/
		$criteria->compare('historia_id_his',yii::app()->user->ultimaHistoria);
//		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}







public function opciones(){
  $opciones= array(''=>'nulo',1=>'sí',0=>'no');
 return $opciones;
 }

public function opcionesSexo(){
  $opciones= array('M'=>'M','F'=>'F');
 return $opciones;
 }
public function opcionesNormal(){
  $opciones= array(0=>'nulo',1=>'normal',2=>'anormal');
 return $opciones;
 }
public function opcionesPositivo(){
  $opciones= array(0=>'',1=>'+',2=>'-');
 return $opciones;
 }
public function opcionesParto(){
  $opciones= array(''=>'nulo','eutocico'=>'Eutócico','Distócico'=>'Distócico');
 return $opciones;
 }


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Embarazo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
