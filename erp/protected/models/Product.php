<?php

/**
 * This is the model class for table "kk_product".
 *
 * The followings are the available columns in table 'kk_product':
 * @property integer $product_id
 * @property integer $vendor_id
 * @property string $sku
 * @property string $name
 * @property string $length
 * @property string $width
 * @property string $height
 * @property string $product_weight
 * @property string $shipping_weight
 * @property string $short_description
 * @property string $description
 * @property string $craft_id
 * @property integer $artisan_id
 * @property integer $status
 * @property string $cost_currency
 * @property string $cost
 * @property string $price_currency
 * @property string $price
 * @property string $small_image
 * @property string $asin
 * @property string $upc
 * @property integer $magento_qty
 * @property integer $fba_uk_qty
 * @property integer $fba_us_qty
 * @property integer $reorder_point
 * @property integer $total_qty
 * @property integer $location_id
 *
 * The followings are the available model relations:
 * @property KkPoItem[] $kkPoItems
 * @property KkLocation $location
 * @property KkVendor $vendor
 * @property KkQuoteItem[] $kkQuoteItems
 */
class Product extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public function behaviors(){
		return array(
			'CTimestampBehavior' => array(
				'class' => 'zii.behaviors.CTimestampBehavior',
				'createAttribute' => 'created_at',
							'enabled'=>true,
				'updateAttribute' => 'updated_at',
			)
		);
    }

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kk_product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vendor_id, sku, name, status, cost_currency, cost ', 'required'),
			array('vendor_id, artisan_id, status, magento_qty, fba_uk_qty, fba_us_qty, reorder_point, total_qty, location_id', 'numerical', 'integerOnly'=>true),
			array('sku', 'length', 'max'=>50),
			array('name, asin, upc', 'length', 'max'=>100),
			array('length, width, height, product_weight, shipping_weight', 'length', 'max'=>8),
			array('craft_id', 'length', 'max'=>200),
			array('cost_currency, price_currency', 'length', 'max'=>10),
			array('cost, price', 'length', 'max'=>12),
			array('small_image', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('product_id, vendor_id, sku, name, length, width, height, product_weight, shipping_weight, short_description, description, craft_id, artisan_id, status, cost_currency, cost, price_currency, price, small_image, asin, upc, magento_qty, fba_uk_qty, fba_us_qty, reorder_point, total_qty, location_id', 'safe', 'on'=>'search'),
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
			'kkPoItems' => array(self::HAS_MANY, 'KkPoItem', 'product_id'),
			'location' => array(self::BELONGS_TO, 'KkLocation', 'location_id'),
			'vendor' => array(self::BELONGS_TO, 'KkVendor', 'vendor_id'),
			'kkQuoteItems' => array(self::HAS_MANY, 'KkQuoteItem', 'product_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'product_id' => 'Product',
			'vendor_id' => 'Vendor',
			'sku' => 'Sku',
			'name' => 'Name',
			'length' => 'Length',
			'width' => 'Width',
			'height' => 'Height',
			'product_weight' => 'Product Weight',
			'shipping_weight' => 'Shipping Weight',
			'short_description' => 'Short Description',
			'description' => 'Description',
			'craft_id' => 'Craft',
			'artisan_id' => 'Artisan',
			'status' => 'Status',
			'cost_currency' => 'Cost Currency',
			'cost' => 'Cost',
			'price_currency' => 'Price Currency',
			'price' => 'Price',
			'small_image' => 'Small Image',
			'asin' => 'Asin',
			'upc' => 'Upc',
			'magento_qty' => 'Magento Qty',
			'fba_uk_qty' => 'Fba Uk Qty',
			'fba_us_qty' => 'Fba Us Qty',
			'reorder_point' => 'Reorder Point',
			'total_qty' => 'Total Qty',
			'location_id' => 'Location',
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

		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('vendor_id',$this->vendor_id);
		$criteria->compare('sku',$this->sku,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('length',$this->length,true);
		$criteria->compare('width',$this->width,true);
		$criteria->compare('height',$this->height,true);
		$criteria->compare('product_weight',$this->product_weight,true);
		$criteria->compare('shipping_weight',$this->shipping_weight,true);
		$criteria->compare('short_description',$this->short_description,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('craft_id',$this->craft_id,true);
		$criteria->compare('artisan_id',$this->artisan_id);
		$criteria->compare('status',$this->status);
		$criteria->compare('cost_currency',$this->cost_currency,true);
		$criteria->compare('cost',$this->cost,true);
		$criteria->compare('price_currency',$this->price_currency,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('small_image',$this->small_image,true);
		$criteria->compare('asin',$this->asin,true);
		$criteria->compare('upc',$this->upc,true);
		$criteria->compare('magento_qty',$this->magento_qty);
		$criteria->compare('fba_uk_qty',$this->fba_uk_qty);
		$criteria->compare('fba_us_qty',$this->fba_us_qty);
		$criteria->compare('reorder_point',$this->reorder_point);
		$criteria->compare('total_qty',$this->total_qty);
		$criteria->compare('location_id',$this->location_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}