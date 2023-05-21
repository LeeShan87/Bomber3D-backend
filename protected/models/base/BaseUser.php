<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property integer $reg_date
 * @property integer $last_login_date
 * @property integer $fb_id
 * @property string $username
 * @property string $email
 * @property string $password
 *
 * The followings are the available model relations:
 * @property Playerdata[] $playerdatas
 */
class BaseUser extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username', 'length', 'max'=>40),
			array('email, password', 'length', 'max'=>50),
                        array('username','unique'),
                        array('username, email','required'),
                        array('email','email'),
                         array('reg_date','default',
              'value'=>new CDbExpression('NOW()'),
              'setOnEmpty'=>false,'on'=>'insert'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, email, password, fb_id,reg_date,last_login_date', 'safe', 'on'=>'search'),
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
			'playerdatas' => array(self::HAS_MANY, 'Playerdata', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
                        'fb_id'=>'Facebook Id',
			'username' => 'Username',
			'email' => 'Email',
			'password' => 'Password',
      'reg_date' => 'Reg date',
      'last_login_date' => 'Last login',
      
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

		$criteria->compare('id',$this->id);
		$criteria->compare('reg_date',$this->reg_date);
		$criteria->compare('last_login_date',$this->last_login_date);
		$criteria->compare('fb_id',$this->fb_id);
                $criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        	protected function afterValidate()
	{
		parent::afterValidate();
		$this->password = $this->encrypt($this->password);
	}
        protected function afterSave() {
            parent::afterSave();
            $this->refresh();
            $player=Playerdata::model()->findByAttributes(array("user_id"=>  $this->id));
            if(!$player){$p=new Playerdata();
            $p->user_id=  $this->id;
            $p->save();}
        } 

        public function encrypt($value)
	{
		return md5($value);
	}
}