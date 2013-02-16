<?php

/**
 * This is the model class for table "kk_po".
 *
 * The followings are the available columns in table 'kk_po':
 * @property integer $po_id
 * @property integer $quote_id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $vendor_id
 * @property string $status
 * @property string $total_currency
 * @property string $total
 * @property string $shipping
 * @property string $duty
 * @property string $taxes
 *
 * The followings are the available model relations:
 * @property KkVendor $vendor
 * @property KkQuote $quote
 * @property KkPoItem[] $kkPoItems
 * @property KkPoReceive[] $kkPoReceives
 */
class Po extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Po the static model class
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
		return 'kk_po';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('quote_id, created_at, updated_at, status, total_currency, total, shipping, duty, taxes', 'required'),
			array('quote_id, vendor_id', 'numerical', 'integerOnly'=>true),
			array('status', 'length', 'max'=>1),
			array('total_currency', 'length', 'max'=>10),
			array('total, shipping, duty, taxes', 'length', 'max'=>12),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('po_id, quote_id, created_at, updated_at, vendor_id, status, total_currency, total, shipping, duty, taxes', 'safe', 'on'=>'search'),
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
			'vendor' => array(self::BELONGS_TO, 'KkVendor', 'vendor_id'),
			'quote' => array(self::BELONGS_TO, 'KkQuote', 'quote_id'),
			'kkPoItems' => array(self::HAS_MANY, 'KkPoItem', 'po_id'),
			'kkPoReceives' => array(self::HAS_MANY, 'KkPoReceive', 'po_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'po_id' => 'Po',
			'quote_id' => 'Quote',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'vendor_id' => 'Vendor',
			'status' => 'Status',
			'total_currency' => 'Total Currency',
			'total' => 'Total',
			'shipping' => 'Shipping',
			'duty' => 'Duty',
			'taxes' => 'Taxes',
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

		$criteria->compare('po_id',$this->po_id);
		$criteria->compare('quote_id',$this->quote_id);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('vendor_id',$this->vendor_id);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('total_currency',$this->total_currency,true);
		$criteria->compare('total',$this->total,true);
		$criteria->compare('shipping',$this->shipping,true);
		$criteria->compare('duty',$this->duty,true);
		$criteria->compare('taxes',$this->taxes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}