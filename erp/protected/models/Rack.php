<?php

/**
 * This is the model class for table "kk_rack".
 *
 * The followings are the available columns in table 'kk_rack':
 * @property integer $rack_id
 * @property integer $warehouse_id
 * @property string $name
 * @property integer $active
 *
 * The followings are the available model relations:
 * @property KkLocation[] $kkLocations
 * @property KkWarehouse $warehouse
 */
class Rack extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Rack the static model class
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
		return 'kk_rack';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, active', 'required'),
			array('warehouse_id, active', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('rack_id, warehouse_id, name, active', 'safe', 'on'=>'search'),
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
			'kkLocations' => array(self::HAS_MANY, 'KkLocation', 'rack_id'),
			'warehouse' => array(self::BELONGS_TO, 'KkWarehouse', 'warehouse_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rack_id' => 'Rack',
			'warehouse_id' => 'Warehouse',
			'name' => 'Name',
			'active' => 'Active',
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

		$criteria->compare('rack_id',$this->rack_id);
		$criteria->compare('warehouse_id',$this->warehouse_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('active',$this->active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}