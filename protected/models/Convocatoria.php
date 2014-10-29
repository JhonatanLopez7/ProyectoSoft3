<?php

/**
 * This is the model class for table "convocatoria".
 *
 * The followings are the available columns in table 'convocatoria':
 * @property integer $codigo
 * @property string $nombre
 * @property string $objetivo
 * @property integer $tipo
 * @property integer $estilo
 * @property string $fecha_creacion
 * @property string $fecha_ultima_modificacion
 *
 * The followings are the available model relations:
 * @property Formulario $formulario
 * @property Participante $participante
 */
class Convocatoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'convocatoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, objetivo, tipo, estilo, fecha_creacion, fecha_ultima_modificacion', 'required'),
			array('tipo, estilo', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo, nombre, objetivo, tipo, estilo, fecha_creacion, fecha_ultima_modificacion', 'safe', 'on'=>'search'),
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
			'formulario' => array(self::HAS_ONE, 'Formulario', 'codigo'),
			'participante' => array(self::HAS_ONE, 'Participante', 'codigo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo' => 'Codigo',
			'nombre' => 'Nombre',
			'objetivo' => 'Objetivo',
			'tipo' => 'Tipo',
			'estilo' => 'Estilo',
			'fecha_creacion' => 'Fecha Creacion',
			'fecha_ultima_modificacion' => 'Fecha Ultima Modificacion',
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

		$criteria->compare('codigo',$this->codigo);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('objetivo',$this->objetivo,true);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('estilo',$this->estilo);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_ultima_modificacion',$this->fecha_ultima_modificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Convocatoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
