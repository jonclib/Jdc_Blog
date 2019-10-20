<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id_user
 * @property string $img
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property integer $id_country
 * @property integer $id_state
 * @property integer $id_role
 * @property string $created_at
 * @property string $updated_at
 * @property string $last_access
 */
class Register extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		// pendiente con estas reglas si no se cumplen no te deja insertar en las tablas
		return array(
			array('first_name, last_name, email, password', 'required')			
		);
	}	

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_user' => 'Id User',		
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email' => 'Email',
			'password' => 'Password'			
		);
	}	

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
