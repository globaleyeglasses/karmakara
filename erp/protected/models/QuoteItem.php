<?php

/**
 * This is the model class for table "kk_quote_item".
 *
 * The followings are the available columns in table 'kk_quote_item':
 * @property integer $qoute_item_id
 * @property integer $quote_id
 * @property integer $vendor_id
 * @property integer $product_id
 * @property string $cost_currency
 * @property string $cost
 * @property integer $qty
 * @property string $subtotal
 *
 * The followings are the available model relations:
 * @property KkProduct $product
 * @property KkQuote $quote
 */
class QuoteItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return QuoteItem the static model class
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
		return 'kk_quote_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vendor_id, product_id, cost_currency, cost, qty, subtotal', 'required'),
			array('quote_id, vendor_id, product_id, qty', 'numerical', 'integerOnly'=>true),
			array('cost_currency', 'length', 'max'=>10),
			array('cost, subtotal', 'length', 'max'=>12),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('qoute_item_id, quote_id, vendor_id, product_id, cost_currency, cost, qty, subtotal', 'safe', 'on'=>'search'),
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
			'product' => array(self::BELONGS_TO, 'KkProduct', 'product_id'),
			'quote' => array(self::BELONGS_TO, 'KkQuote', 'quote_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'qoute_item_id' => 'Qoute Item',
			'quote_id' => 'Quote',
			'vendor_id' => 'Vendor',
			'product_id' => 'Product',
			'cost_currency' => 'Cost Currency',
			'cost' => 'Cost',
			'qty' => 'Qty',
			'subtotal' => 'Subtotal',
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

		$criteria->compare('qoute_item_id',$this->qoute_item_id);
		$criteria->compare('quote_id',$this->quote_id);
		$criteria->compare('vendor_id',$this->vendor_id);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('cost_currency',$this->cost_currency,true);
		$criteria->compare('cost',$this->cost,true);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('subtotal',$this->subtotal,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}