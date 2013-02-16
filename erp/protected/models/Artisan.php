<?php

/**
 * This is the model class for table "kk_artisan".
 *
 * The followings are the available columns in table 'kk_artisan':
 * @property integer $artisan_id
 * @property string $name
 * @property string $title
 * @property string $description
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $phone
 * @property string $email
 * @property string $image
 * @property string $video
 * @property integer $status
 * @property string $craft_id
 * @property string $created_at
 * @property string $updated_at
 */
class Artisan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Artisan the static model class
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
		return 'kk_artisan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, title, description, address2, city, state, country, phone, email, status, craft_id, created_at, updated_at', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('name, title, address1, address2, video, craft_id', 'length', 'max'=>200),
			array('city, state, country, email, image', 'length', 'max'=>100),
			array('phone', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('artisan_id, name, title, description, address1, address2, city, state, country, phone, email, image, video, status, craft_id, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'artisan_id' => 'Artisan',
			'name' => 'Name',
			'title' => 'Title',
			'description' => 'Description',
			'address1' => 'Address1',
			'address2' => 'Address2',
			'city' => 'City',
			'state' => 'State',
			'country' => 'Country',
			'phone' => 'Phone',
			'email' => 'Email',
			'image' => 'Image',
			'video' => 'Video',
			'status' => 'Status',
			'craft_id' => 'Craft',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
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

		$criteria->compare('artisan_id',$this->artisan_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('video',$this->video,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('craft_id',$this->craft_id,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}