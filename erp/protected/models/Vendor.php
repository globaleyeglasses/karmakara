<?php

/**
 * This is the model class for table "kk_vendor".
 *
 * The followings are the available columns in table 'kk_vendor':
 * @property string $created_at
 * @property string $updated_at
 * @property integer $vendor_id
 * @property string $created_date
 * @property string $name
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $phone
 * @property string $email
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property KkPo[] $kkPos
 * @property KkProduct[] $kkProducts
 */
class Vendor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vendor the static model class
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
		return 'kk_vendor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_at, updated_at, created_date, name, address1, address2, city, state, country, phone, email, status', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('address1, address2', 'length', 'max'=>60),
			array('city, state, country, phone', 'length', 'max'=>30),
			array('email', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('created_at, updated_at, vendor_id, created_date, name, address1, address2, city, state, country, phone, email, status', 'safe', 'on'=>'search'),
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
			'kkPos' => array(self::HAS_MANY, 'KkPo', 'vendor_id'),
			'kkProducts' => array(self::HAS_MANY, 'KkProduct', 'vendor_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'vendor_id' => 'Vendor',
			'created_date' => 'Created Date',
			'name' => 'Name',
			'address1' => 'Address1',
			'address2' => 'Address2',
			'city' => 'City',
			'state' => 'State',
			'country' => 'Country',
			'phone' => 'Phone',
			'email' => 'Email',
			'status' => 'Status',
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

		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('vendor_id',$this->vendor_id);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}