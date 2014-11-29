<?php

/**
 * This is the model class for table "field".
 *
 * The followings are the available columns in table 'field':
 * @property integer $Id
 * @property integer $Capacity
 * @property string $Name
 * @property string $Ubication
 * @property string $Size
 * @property integer $Price
 * @property string $Schedule
 */
class Field extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Field the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'field';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Id, Capacity, Name, Ubication, Size, Price, Schedule', 'required'),
			array('Id, Capacity, Price', 'numerical', 'integerOnly'=>true),
			array('Name, Ubication', 'length', 'max'=>50),
			array('Size', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, Capacity, Name, Ubication, Size, Price, Schedule', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'Capacity' => 'Capacity',
			'Name' => 'Name',
			'Ubication' => 'Ubication',
			'Size' => 'Size',
			'Price' => 'Price',
			'Schedule' => 'Schedule',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Id',$this->Id);
		$criteria->compare('Capacity',$this->Capacity);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Ubication',$this->Ubication,true);
		$criteria->compare('Size',$this->Size,true);
		$criteria->compare('Price',$this->Price);
		$criteria->compare('Schedule',$this->Schedule,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}