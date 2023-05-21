<?php

/**
 * This is the model class for table "donate".
 *
 * The followings are the available columns in table 'donate':
 * @property integer $Id
 * @property string $description
 * @property string $imageurl
 * @property integer $bombs
 * @property integer $range
 * @property integer $life
 * @property integer $trigger
 * @property string $not_active
 * @property integer $price
 * @property integer $month
 *
 * The followings are the available model relations:
 * @property PlayerdataDonate[] $playerdataDonates
 */
class BaseDonate extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Donate the static model class
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
		return 'donate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('description, bombs, range, life, trigger, not_active, price, month', 'required'),
			array('bombs, range, life, trigger, price, month', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, description, bombs, range, life, trigger, not_active, price, month,imageurl', 'safe', 'on'=>'search'),
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
			'playerdataDonates' => array(self::HAS_MANY, 'PlayerdataDonate', 'donate_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'description' => 'Description',
			'bombs' => 'Bombs',
			'range' => 'Range',
			'life' => 'Life',
			'trigger' => 'Trigger',
			'not_active' => 'Not Active',
			'price' => 'Price',
			'month' => 'Month',
                        'imageurl'=>'Image url',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('bombs',$this->bombs);
		$criteria->compare('range',$this->range);
		$criteria->compare('life',$this->life);
		$criteria->compare('trigger',$this->trigger);
		$criteria->compare('not_active',$this->not_active,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('month',$this->month);
                $criteria->compare('imageurl',$this->imageurl);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}