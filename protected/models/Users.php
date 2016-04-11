<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $password
 * @property string $phone_number
 * @property string $job_profile
 * @property string $organization
 * @property integer $is_verified
 * @property string $hash
 * @property integer $role_id
 * @property string $oauth_uid
 * @property string $in_profile_url
 * @property string $image
 * @property string $profile_img
 * @property string $admin_notes
 * @property integer $status
 * @property string $add_date
 * @property string $modify_date
 *
 * The followings are the available model relations:
 * @property Invoice[] $invoices
 * @property Product[] $products
 * @property Roles $role
 */
class Users extends CActiveRecord
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
		return array(
			array('first_name, username, password, role_id, oauth_uid, in_profile_url, profile_img, add_date', 'required'),
			array('is_verified, role_id, status', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, in_profile_url', 'length', 'max'=>50),
			array('username, password, job_profile, organization, oauth_uid', 'length', 'max'=>100),
			array('phone_number', 'length', 'max'=>25),
			array('hash, image, profile_img', 'length', 'max'=>255),
			array('admin_notes, modify_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, last_name, username, password, phone_number, job_profile, organization, is_verified, hash, role_id, oauth_uid, in_profile_url, image, profile_img, admin_notes, status, add_date, modify_date', 'safe', 'on'=>'search'),
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
			'invoices' => array(self::HAS_MANY, 'Invoice', 'user_id'),
			'products' => array(self::MANY_MANY, 'Product', 'reviews(user_id, product_id)'),
			'role' => array(self::BELONGS_TO, 'Roles', 'role_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'username' => 'Username',
			'password' => 'Password',
			'phone_number' => 'Phone Number',
			'job_profile' => 'Job Profile',
			'organization' => 'Organization',
			'is_verified' => 'Is Verified',
			'hash' => 'Hash',
			'role_id' => 'Role',
			'oauth_uid' => 'Oauth Uid',
			'in_profile_url' => 'In Profile Url',
			'image' => 'Image',
			'profile_img' => 'Profile Img',
			'admin_notes' => 'Admin Notes',
			'status' => 'Status',
			'add_date' => 'Add Date',
			'modify_date' => 'Modify Date',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('phone_number',$this->phone_number,true);
		$criteria->compare('job_profile',$this->job_profile,true);
		$criteria->compare('organization',$this->organization,true);
		$criteria->compare('is_verified',$this->is_verified);
		$criteria->compare('hash',$this->hash,true);
		$criteria->compare('role_id',$this->role_id);
		$criteria->compare('oauth_uid',$this->oauth_uid,true);
		$criteria->compare('in_profile_url',$this->in_profile_url,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('profile_img',$this->profile_img,true);
		$criteria->compare('admin_notes',$this->admin_notes,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('add_date',$this->add_date,true);
		$criteria->compare('modify_date',$this->modify_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
