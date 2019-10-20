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
class User extends CActiveRecord
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
			array('img, first_name, last_name, email, password, id_country, id_state, id_role, created_at, updated_at, last_access', 'required'),
			array('id_country, id_state, id_role', 'numerical', 'integerOnly'=>true),
			array('img, first_name, last_name, created_at, updated_at, last_access', 'length', 'max'=>50),
			array('email', 'length', 'max'=>70),
			array('password', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_user, img, first_name, last_name, email, password, id_country, id_state, id_role, created_at, updated_at, last_access', 'safe', 'on'=>'search'),
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
			'id_user' => 'Id User',
			'img' => 'Img',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email' => 'Email',
			'password' => 'Password',
			'id_country' => 'Id Country',
			'id_state' => 'Id State',
			'id_role' => 'Id Role',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'last_access' => 'Last Access',
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

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('id_country',$this->id_country);
		$criteria->compare('id_state',$this->id_state);
		$criteria->compare('id_role',$this->id_role);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('last_access',$this->last_access,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	 public function validatePassword($password)
    {
        // return $this->hashPassword($password,$this->salt)===$this->password;
        return password_verify( $password, $hash );
    }

    public function checkUser($email, $password)
	{
			
		
		return $this->verifyHash( $password, $hash );
		
	}

	public function verifyHash( $password, $hash )
	{
		return password_verify( $password, $hash );

	}



 
    public function hashPassword($password,$salt)
    {
        return md5($salt.$password);
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
