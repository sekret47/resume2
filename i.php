<?php

/**
 * This is the model class for table "item".
 *
 * The followings are the available columns in table 'item':
 * @property integer $id
 * @property string $name
 * @property string $decription
 * @property string $price
 */
class Item extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
    public $field;
    public $crit;
	public function tableName()
	{
		return 'item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('name, decription, price', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name,field,crit,row', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'name' => 'Name',
			'decription' => 'Decription',
			'price' => 'Price',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
public $row;


	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

        if($this->crit == 'contains'){
            $criteria->compare($this->field,$this->_searchCriteria($this->row,$this->crit),true);

        }
        if($this->crit == 'start'){
            $criteria->compare($this->field,$this->_searchCriteria($this->row,$this->crit),true);

        }else{
            $criteria->compare($this->field,$this->_searchCriteria($this->row,$this->crit));

        }

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    protected  function _searchCriteria($row,$compare){

        switch($compare){
            case 'equal':
                return '='.$row;
            case 'notEqual':
                return '<>'.$row;
            case 'contains':
                return $row;
            case 'start':
                return $row;
        }
    }


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Item the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
