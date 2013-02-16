<?php

/**
 * This is the model class for table "kk_po_receive_item".
 *
 * The followings are the available columns in table 'kk_po_receive_item':
 * @property integer $po_receive_item_id
 * @property integer $po_receive_id
 * @property integer $po_item_id
 * @property integer $qty_received
 *
 * The followings are the available model relations:
 * @property KkPoItem $poItem
 * @property KkPoReceive $poReceive
 */
class PoReceiveItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PoReceiveItem the static model class
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
		return 'kk_po_receive_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('qty_received', 'required'),
			array('po_receive_id, po_item_id, qty_received', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('po_receive_item_id, po_receive_id, po_item_id, qty_received', 'safe', 'on'=>'search'),
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
			'poItem' => array(self::BELONGS_TO, 'KkPoItem', 'po_item_id'),
			'poReceive' => array(self::BELONGS_TO, 'KkPoReceive', 'po_receive_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'po_receive_item_id' => 'Po Receive Item',
			'po_receive_id' => 'Po Receive',
			'po_item_id' => 'Po Item',
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

		$criteria->compare('po_receive_item_id',$this->po_receive_item_id);
		$criteria->compare('po_receive_id',$this->po_receive_id);
		$criteria->compare('po_item_id',$this->po_item_id);
		$criteria->compare('qty_received',$this->qty_received);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}