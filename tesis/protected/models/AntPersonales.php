<?php

/**
 * This is the model class for table "ant_personales".
 *
 * The followings are the available columns in table 'ant_personales':
 * @property integer $id_ant_per
 * @property integer $abenitis
 * @property integer $alergia
 * @property integer $amigdalitis
 * @property integer $artritis
 * @property integer $asma
 * @property integer $blenorragia
 * @property integer $buba
 * @property integer $catarros
 * @property integer $chagas
 * @property integer $chancros
 * @property integer $difteria
 * @property integer $diarreas
 * @property integer $hansen
 * @property integer $influenza
 * @property integer $lechina
 * @property integer $necatoriasis
 * @property integer $neumonia
 * @property integer $otitis
 * @property integer $paludismo
 * @property integer $parasitos
 * @property integer $parotitis
 * @property integer $pleuresia
 * @property integer $quirurgicos
 * @property integer $rinofaringitis
 * @property integer $rubeola
 * @property integer $sarampion
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
class AntPersonales extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ant_personales';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('abenitis, alergia, amigdalitis, artritis, asma, blenorragia, buba, catarros, chagas, chancros, difteria, diarreas, hansen, influenza, lechina, necatoriasis, neumonia, otitis, paludismo, parasitos, parotitis, pleuresia, quirurgicos, rinofaringitis, rubeola, sarampion, sifilis, tbc, tifoidea, tosferina, traumatismo, vacunaciones, otros', 'numerical', 'integerOnly'=>true),
			array('observaciones', 'length', 'max'=>45),
			array('observaciones','filter','filter'=>array($obj=new CHtmlPurifier(),'purify')),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ant_per, abenitis, alergia, amigdalitis, artritis, asma, blenorragia, buba, catarros, chagas, chancros, difteria, diarreas, hansen, influenza, lechina, necatoriasis, neumonia, otitis, paludismo, parasitos, parotitis, pleuresia, quirurgicos, rinofaringitis, rubeola, sarampion, sifilis, tbc, tifoidea, tosferina, traumatismo, vacunaciones, otros, observaciones', 'safe', 'on'=>'search'),
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
			'antecedentes' => array(self::HAS_MANY, 'Antecedentes', 'id_ant_per'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ant_per' => 'Id Ant Per',
			'abenitis' => 'Adenitis',
			'alergia' => 'Alergia',
			'amigdalitis' => 'Amigdalitis',
			'artritis' => 'Artritis',
			'asma' => 'Asma',
			'blenorragia' => 'Blenorragia',
			'buba' => 'Buba',
			'catarros' => 'Catarros',
			'chagas' => 'Chagas',
			'chancros' => 'Chancros',
			'difteria' => 'Difteria',
			'diarreas' => 'Diarreas',
			'hansen' => 'Hansen',
			'influenza' => 'Influenza',
			'lechina' => 'Lechina',
			'necatoriasis' => 'Necatoriasis',
			'neumonia' => 'Neumonía',
			'otitis' => 'Otitis',
			'paludismo' => 'Paludismo',
			'parasitos' => 'Parásitos',
			'parotitis' => 'Parotitis',
			'pleuresia' => 'Pleuresía',
			'quirurgicos' => 'Quirúrgicos',
			'rinofaringitis' => 'Rinofaringitis',
			'rubeola' => 'Rubéola',
			'sarampion' => 'Sarampión',
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

		$criteria->compare('id_ant_per',$this->id_ant_per);
		$criteria->compare('abenitis',$this->abenitis);
		$criteria->compare('alergia',$this->alergia);
		$criteria->compare('amigdalitis',$this->amigdalitis);
		$criteria->compare('artritis',$this->artritis);
		$criteria->compare('asma',$this->asma);
		$criteria->compare('blenorragia',$this->blenorragia);
		$criteria->compare('buba',$this->buba);
		$criteria->compare('catarros',$this->catarros);
		$criteria->compare('chagas',$this->chagas);
		$criteria->compare('chancros',$this->chancros);
		$criteria->compare('difteria',$this->difteria);
		$criteria->compare('diarreas',$this->diarreas);
		$criteria->compare('hansen',$this->hansen);
		$criteria->compare('influenza',$this->influenza);
		$criteria->compare('lechina',$this->lechina);
		$criteria->compare('necatoriasis',$this->necatoriasis);
		$criteria->compare('neumonia',$this->neumonia);
		$criteria->compare('otitis',$this->otitis);
		$criteria->compare('paludismo',$this->paludismo);
		$criteria->compare('parasitos',$this->parasitos);
		$criteria->compare('parotitis',$this->parotitis);
		$criteria->compare('pleuresia',$this->pleuresia);
		$criteria->compare('quirurgicos',$this->quirurgicos);
		$criteria->compare('rinofaringitis',$this->rinofaringitis);
		$criteria->compare('rubeola',$this->rubeola);
		$criteria->compare('sarampion',$this->sarampion);
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
	 * @return AntPersonales the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
