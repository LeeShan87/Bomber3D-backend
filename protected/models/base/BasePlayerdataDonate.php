<?php

/**
 * This is the model class for table "playerdata_donate".
 *
 * The followings are the available columns in table 'playerdata_donate':
 * @property integer $playerdata_id
 * @property integer $donate_id
 * @property string $donate_time
 * @property string $donate_end
 *
 * The followings are the available model relations:
 * @property Donate $donate
 * @property Playerdata $playerdata
 */
class BasePlayerdataDonate extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PlayerdataDonate the static model class
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
		return 'playerdata_donate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
       // public function beforeValidate() {
            //parent::beforeValidate();
           // echo '<br>'.$this->playerdata_id. ' '.$this->donate_id.' '.$this->donate->life;
        //}
        public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
                echo '<br>date:'.'CURDATE() + interval '. $this->donate->month .' month'.'<br>';
		return array(
			array('playerdata_id, donate_id', 'required'),
			array('playerdata_id, donate_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
		        array('donate_time','default',
                        'value'=>new CDbExpression('NOW()'),
                        'setOnEmpty'=>false,'on'=>'insert'),	
                        array('donate_end','default',
                        'value'=>new CDbExpression('CURDATE() + interval '. $this->donate->month .' month'),
                        'setOnEmpty'=>false,'on'=>'insert'),	
                        array('playerdata_id, donate_id, donate_time, donate_end', 'safe', 'on'=>'search'),
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
			'donate' => array(self::BELONGS_TO, 'Donate', 'donate_id'),
			'playerdata' => array(self::BELONGS_TO, 'Playerdata', 'playerdata_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'playerdata_id' => 'Playerdata',
			'donate_id' => 'Donate',
			'donate_time' => 'Donate Time',
			'donate_end' => 'Donate End',
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

		$criteria->compare('playerdata_id',$this->playerdata_id);
		$criteria->compare('donate_id',$this->donate_id);
		$criteria->compare('donate_time',$this->donate_time);
		$criteria->compare('donate_end',$this->donate_end);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}