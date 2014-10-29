<?php

/**
 * This is the model class for table "participante".
 *
 * The followings are the available columns in table 'participante':
 * @property integer $codigo
 * @property integer $identificacion
 * @property string $rol
 * @property string $seccion
 *
 * The followings are the available model relations:
 * @property Convocatoria $codigo0
 */
class Participante extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'participante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo, identificacion, rol, seccion', 'required'),
			array('codigo, identificacion', 'numerical', 'integerOnly'=>true),
			array('rol', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo, identificacion, rol, seccion', 'safe', 'on'=>'search'),
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
			'codigo0' => array(self::BELONGS_TO, 'Convocatoria', 'codigo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo' => 'Codigo',
			'identificacion' => 'Identificacion',
			'rol' => 'Rol',
			'seccion' => 'Seccion',
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
		$criteria->compare('identificacion',$this->identificacion);
		$criteria->compare('rol',$this->rol,true);
		$criteria->compare('seccion',$this->seccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Participante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
