<?php

/**
 * This is the model class for table "campo".
 *
 * The followings are the available columns in table 'campo':
 * @property integer $codigo
 * @property string $nombre
 * @property double $longitud
 * @property integer $tipo
 * @property integer $obligatorio
 * @property integer $visible
 *
 * The followings are the available model relations:
 * @property SeccionDinamica $codigo0
 */
class Campo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'campo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo, nombre, longitud, tipo, obligatorio, visible', 'required'),
			array('codigo, tipo, obligatorio, visible', 'numerical', 'integerOnly'=>true),
			array('longitud', 'numerical'),
			array('nombre', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo, nombre, longitud, tipo, obligatorio, visible', 'safe', 'on'=>'search'),
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
			'codigo0' => array(self::BELONGS_TO, 'SeccionDinamica', 'codigo'),
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
			'longitud' => 'Longitud',
			'tipo' => 'Tipo',
			'obligatorio' => 'Obligatorio',
			'visible' => 'Visible',
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
		$criteria->compare('longitud',$this->longitud);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('obligatorio',$this->obligatorio);
		$criteria->compare('visible',$this->visible);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Campo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
