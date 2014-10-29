<?php

/**
 * This is the model class for table "formulario".
 *
 * The followings are the available columns in table 'formulario':
 * @property integer $codigo
 * @property string $fecha_creacion
 * @property string $activo_hasta
 * @property integer $estado
 * @property integer $orden
 * @property integer $tipo
 *
 * The followings are the available model relations:
 * @property Cronograma $cronograma
 * @property Convocatoria $codigo0
 * @property PalabrasClave $palabrasClave
 * @property Plantilla $plantilla
 * @property Presupuesto $presupuesto
 * @property Producto $producto
 * @property RequisitoMinimo $requisitoMinimo
 * @property SeccionDinamica $seccionDinamica
 * @property Usuario[] $usuarios
 */
class Formulario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'formulario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_creacion, activo_hasta, estado, orden, tipo', 'required'),
			array('estado, orden, tipo', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo, fecha_creacion, activo_hasta, estado, orden, tipo', 'safe', 'on'=>'search'),
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
			'cronograma' => array(self::HAS_ONE, 'Cronograma', 'codigo'),
			'codigo0' => array(self::BELONGS_TO, 'Convocatoria', 'codigo'),
			'palabrasClave' => array(self::HAS_ONE, 'PalabrasClave', 'codigo'),
			'plantilla' => array(self::HAS_ONE, 'Plantilla', 'codigo'),
			'presupuesto' => array(self::HAS_ONE, 'Presupuesto', 'codigo'),
			'producto' => array(self::HAS_ONE, 'Producto', 'codigo'),
			'requisitoMinimo' => array(self::HAS_ONE, 'RequisitoMinimo', 'codigo'),
			'seccionDinamica' => array(self::HAS_ONE, 'SeccionDinamica', 'codigo'),
			'usuarios' => array(self::MANY_MANY, 'Usuario', 'usario_formulario(formulario_fk, usario_fk)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo' => 'Codigo',
			'fecha_creacion' => 'Fecha Creacion',
			'activo_hasta' => 'Activo Hasta',
			'estado' => 'Estado',
			'orden' => 'Orden',
			'tipo' => 'Tipo',
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
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('activo_hasta',$this->activo_hasta,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('orden',$this->orden);
		$criteria->compare('tipo',$this->tipo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Formulario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
