<?php

/**
 * This is the model class for table "enterprise".
 *
 * The followings are the available columns in table 'enterprise':
 * @property integer $Id
 * @property string $name
 * @property integer $bathroom
 * @property integer $parking
 * @property integer $coffee_shop
 * @property integer $wifi
 * @property integer $beer
 * @property integer $shower
 * @property string $description
 */
class Enterprise extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'enterprise';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, bathroom, parking, coffee_shop, wifi, beer, shower, description', 'required'),
			array('bathroom, parking, coffee_shop, wifi, beer, shower', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('description', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, name, bathroom, parking, coffee_shop, wifi, beer, shower, description', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'bathroom' => 'Bathroom',
			'parking' => 'Parking',
			'coffee_shop' => 'Coffee Shop',
			'wifi' => 'Wifi',
			'beer' => 'Beer',
			'shower' => 'Shower',
			'description' => 'Description',
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

		$criteria->compare('Id',$this->Id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('bathroom',$this->bathroom);
		$criteria->compare('parking',$this->parking);
		$criteria->compare('coffee_shop',$this->coffee_shop);
		$criteria->compare('wifi',$this->wifi);
		$criteria->compare('beer',$this->beer);
		$criteria->compare('shower',$this->shower);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Enterprise the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
