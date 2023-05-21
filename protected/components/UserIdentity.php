<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
		private $_id;
                private $_email;
                public function __construct($email,$password,$username="")
	{
		$this->username=$username;
		$this->password=$password;
                $this->_email=$email;
	}  
        public function authenticate()
	{
		$user=  User::model()->findByAttributes(array('email'=>$this->email));
		if($user===null)
		{
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		else
		{
			if($user->password!==$user->encrypt($this->password))
			{
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			}
			else
			{        
                            $this->username=$user->username;
                                $this->_email=$user->email;
				$this->_id = $user->id;
        $user->last_login_date=date("Y-m-d H:i:s");
        $user->update();
				$this->errorCode=self::ERROR_NONE;
			}
		}
		return !$this->errorCode;
	}
	public function isAdmin(){
		return $this->getId()==1?true :false;
	}
        public function getEmail()
	{
		return $this->_email;
	}
	public function getId()
	{
		return $this->_id;
	}

}