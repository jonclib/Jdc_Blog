<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	private $_id;


	public function authenticate()
	{
		// $username=strtolower($this->username);
		// $user=User::model()->find('LOWER(email)=?',array($username));
		// selecciono donde el email es igual al email que envie por el input
		$user=User::model()->find('email=?',array($this->username));
		if($user===null)
			// estos son errores que se muestran en las vistas de validacion
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		// le paso primero el password del input y verifico con el hash en la tabla
		else if(!$user->verifyHash($this->password,$user->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			// aqui se guarda la info del usuario
			$this->_id=$user->id_user;
			$this->username=$user->email;
			$this->errorCode=self::ERROR_NONE;
		}
		return $this->errorCode==self::ERROR_NONE;
	}

	public function getId()
	{
		return $this->_id;
	}



}