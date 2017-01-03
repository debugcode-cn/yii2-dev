<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\mongodb\Query;

/**
 * HomeRoomForm is the myhome db,the room collection.
 */
class HomeRoomForm extends Model
{
	public $name;
	public $style;
	public $size;
	public $haslived;
	public $roomid;

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
				// name, email, subject and body are required
				[['name', 'style', 'size', 'haslived','roomid'], 'required'],
				
		];
	}

	
	public function insertData($arrdata)
	{
		$mongocon = \Yii::$app->mongodb;
		$collection = $mongocon->getCollection('room');
		$res = $collection->insert($arrdata);
		if($res){
			return true;
		}else{
			return false;
		}
	}
	
	public function queryData(){
		$query = new Query();
		
		$query->select(['name', 'size'])
		->from('room')
		->limit(10);
		// execute the query
		$rows = $query->all();
		if($rows){
			return $rows;
		}else{
			return false;
		}
		
	}
	
	public function getOneDataById($id)
	{
		$query = new Query();
		$row = $query->from('room')->
		where(['_id' => $id]) // implicit typecast to [[\MongoDB\BSON\ObjectID]]
		->one();
		return $row;
	}
	
	/**
	 * qi ta cuid caozuo shang dai cha zhao api.
	 */
	
}







