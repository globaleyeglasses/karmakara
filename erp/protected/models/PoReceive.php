<?php

/**
 * This is the model class for table "kk_po_receive".
 *
 * The followings are the available columns in table 'kk_po_receive':
 * @property integer $po_receive_id
 * @property integer $po_id
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property KkPo $po
 * @property KkPoReceiveItem[] $kkPoReceiveItems
 */
class PoReceive extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PoReceive the static model class
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
		return 'kk_po_receive';
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
			//array('created_at, updated_at', 'required'),
			array('po_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('po_receive_id, po_id, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'kkPoReceiveItems' => array(self::HAS_MANY, 'KkPoReceiveItem', 'po_receive_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'po_receive_id' => 'Po Receive',
			'po_id' => 'Po',
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

		$criteria->compare('po_receive_id',$this->po_receive_id);
		$criteria->compare('po_id',$this->po_id);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}