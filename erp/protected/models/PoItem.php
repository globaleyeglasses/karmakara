<?php

/**
 * This is the model class for table "kk_po_item".
 *
 * The followings are the available columns in table 'kk_po_item':
 * @property integer $po_item_id
 * @property integer $po_id
 * @property integer $product_id
 * @property string $cost_currency
 * @property string $cost
 * @property integer $qty
 * @property string $subtotal
 * @property integer $qty_received
 *
 * The followings are the available model relations:
 * @property KkPo $po
 * @property KkProduct $product
 * @property KkPoReceiveItem[] $kkPoReceiveItems
 */
class PoItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PoItem the static model class
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
		return 'kk_po_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('po_id, cost_currency, cost, qty, subtotal, qty_received', 'required'),
			array('po_id, product_id, qty, qty_received', 'numerical', 'integerOnly'=>true),
			array('cost_currency', 'length', 'max'=>10),
			array('cost, subtotal', 'length', 'max'=>12),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('po_item_id, po_id, product_id, cost_currency, cost, qty, subtotal, qty_received', 'safe', 'on'=>'search'),
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
			'po' => array(self::BELONGS_TO, 'KkPo', 'po_id'),
			'product' => array(self::BELONGS_TO, 'KkProduct', 'product_id'),
			'kkPoReceiveItems' => array(self::HAS_MANY, 'KkPoReceiveItem', 'po_item_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'po_item_id' => 'Po Item',
			'po_id' => 'Po',
			'product_id' => 'Product',
			'cost_currency' => 'Cost Currency',
			'cost' => 'Cost',
			'qty' => 'Qty',
			'subtotal' => 'Subtotal',
			'qty_received' => 'Qty Received',
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

		$criteria->compare('po_item_id',$this->po_item_id);
		$criteria->compare('po_id',$this->po_id);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('cost_currency',$this->cost_currency,true);
		$criteria->compare('cost',$this->cost,true);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('subtotal',$this->subtotal,true);
		$criteria->compare('qty_received',$this->qty_received);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}