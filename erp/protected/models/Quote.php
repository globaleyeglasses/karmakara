<?php

/**
 * This is the model class for table "kk_quote".
 *
 * The followings are the available columns in table 'kk_quote':
 * @property integer $quote_id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $user_id
 * @property string $total_currency
 * @property string $total
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property KkPo[] $kkPos
 * @property KkQuoteItem[] $kkQuoteItems
 */
class Quote extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Quote the static model class
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
		return 'kk_quote';
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
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('total_currency', 'required'),
			array('user_id, status', 'numerical', 'integerOnly'=>true),
			array('total_currency', 'length', 'max'=>10),
			array('total', 'length', 'max'=>12),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('quote_id, created_at, updated_at, user_id, total_currency, total, status', 'safe', 'on'=>'search'),
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
			'kkPos' => array(self::HAS_MANY, 'KkPo', 'quote_id'),
			'kkQuoteItems' => array(self::HAS_MANY, 'KkQuoteItem', 'quote_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'quote_id' => 'Quote',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'user_id' => 'User',
			'total_currency' => 'Total Currency',
			'total' => 'Total',
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

		$criteria->compare('quote_id',$this->quote_id);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('total_currency',$this->total_currency,true);
		$criteria->compare('total',$this->total,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}