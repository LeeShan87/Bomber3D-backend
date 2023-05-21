<?php

/**
 * This is the model class for table "playerdata".
 *
 * The followings are the available columns in table 'playerdata':
 * @property integer $bombs
 * @property integer $range
 * @property integer $speed
 * @property integer $trigger
 * @property integer $wallthrough
 * @property integer $bombthrough
 * @property integer $bombprof
 * @property integer $life
 * @property integer $user_id
 * @property integer $id
 * @property integer $level
 * @property integer $hiscore_story
 * @property integer $hiscore_arena
 * @property integer $hiscore_tilltheend
 * @property integer $hiscore_classic
 *
 * The followings are the available model relations:
 * @property User $user
 */
class BasePlayerdata extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Playerdata the static model class
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
		return 'playerdata';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bombs, range, speed, trigger, wallthrough, bombthrough, bombprof, life, user_id ,level,hiscore_arena,hiscore_story,hiscore_tilltheend,hiscore_classic', 'numerical', 'integerOnly'=>true),
			//array('bombs, range','default','value'=>'1'),
                        //array('wallthrough, bombthrough, bombprof ,trigger','default','value'=>'0'),
                        //array('life','default','value'=>'3'),
                        //array('speed','value'=>'6'),
                            // The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bombs, range, speed, trigger, wallthrough, bombthrough, bombprof, life, user_id, id ,level,hiscore_arena,hiscore_story,hiscore_tilltheend,hiscore_classic', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'playerdataDonates' => array(self::HAS_MANY, 'PlayerdataDonate', 'playerdata_id'),
                    	'lastDonate' => array(self::HAS_ONE, 'PlayerdataDonate', 'playerdata_id','order'=>'donate_time desc'),

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bombs' => 'Bombs',
			'range' => 'Range',
			'speed' => 'Speed',
			'trigger' => 'Trigger',
			'wallthrough' => 'Wallthrough',
			'bombthrough' => 'Bombthrough',
			'bombprof' => 'Bombprof',
			'life' => 'Life',
			'level' => 'Level',
			'user_id' => 'User',
			'id' => 'ID',
                    'hiscore_arena' => 'Hiscore arena',
                    'hiscore_story' => 'Hiscore story',
                    'hiscore_classic' => 'Hiscore classic',
                    'hiscore_tilltheend' => 'Hiscore tilltheend',
                    
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

		$criteria->compare('bombs',$this->bombs);
		$criteria->compare('range',$this->range);
		$criteria->compare('speed',$this->speed);
		$criteria->compare('trigger',$this->trigger);
		$criteria->compare('wallthrough',$this->wallthrough);
		$criteria->compare('bombthrough',$this->bombthrough);
		$criteria->compare('bombprof',$this->bombprof);
		$criteria->compare('life',$this->life);
		$criteria->compare('level',$this->level);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('id',$this->id);
                $criteria->compare('hiscore_arena',$this->hiscore_arena);
                $criteria->compare('hiscore_story',$this->hiscore_story);
                $criteria->compare('hiscore_classic',$this->hiscore_classic);
                $criteria->compare('hiscore_tilltheend',$this->hiscore_tilltheend);

           
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}