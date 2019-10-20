<?php


class Login extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	public function verifyHash( $password, $hash )
	{
		return password_verify( $password, $hash );

	} 
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
