<?php

namespace backend\controllers;

use yii\web\Controller;
use backend\models\HomeRoomForm;


//here has used mongodb to store data . it`s a important progress;

class MongoController extends Controller{
	
	public function actionIndex(){
		
// 		public $name;
// 		public $style;
// 		public $size;
// 		public $haslived;
// 		public $roomid;
		
// 		$mongocon = \Yii::$app->mongodb;
		
// 		$collection = $mongocon->getCollection('room');
		
// 		$res = $collection->insert([
// 				'name'=>'wlz',
// 				'age'=>2
// 		]);
// 		print_r($res);

		$roomdl = new HomeRoomForm();
		
		$dataarr = [
// 				'_id'=>'123456781234567812345678',//zhi zhang bu yao zhe yang gao hao ba?
				'name'=>'xiaolei',
				'style'=>'oushi',
				'size'=>'20mm',
				'haslived'=>true,
				'roomid'=>md5('123456789123456789')
				
		];
		
		$insert_result = $roomdl->insertData($dataarr);
		
		if($insert_result){
			echo 'insert ok';
		}else{
			echo 'error occure';
		}

	}
	
	public function actionQuery(){
		$roomdl = new HomeRoomForm();
		$queryres = $roomdl->queryData();
		
		if($queryres != false){
			
			$responseData = [
					"data" 		=>	$queryres,
					"code" 		=>	"200",
					"message" 	=>	"query is ok"
			];
			
// 			print_r($responseData);
			
			
			//get mongodb _id .
			$one_id_data = $queryres[0]['_id'];
// 			echo $one_id_data;
// 			echo gettype($one_id_data);
			
			
// 			return $this->render('login', [	'model' => $model,]);
			
			return $this->render('query',['one_id_data' => $one_id_data , 'responseData'=>$responseData] );
			
		}else{
			echo 'no query data';
		}
	}
	
	public function actionGetonebyid()
	{
		$userHost = \Yii::$app->request->userHost;
		$userIP   = \Yii::$app->request->userIP;
		
		$request = \Yii::$app->request;
		if ($request->isAjax) { /* 该请求是一个 AJAX 请求 */ }
		if ($request->isGet)  { /* 请求方法是 GET */ }
		if ($request->isPost) { /* 请求方法是 POST */ }
		if ($request->isPut)  { /* 请求方法是 PUT */ }
		

		$id = $request->get('id');
		
		$roomdl = new HomeRoomForm();
		$query = $roomdl->getOneDataById($id);
		print_r($query);
	}
		
	public function actionManyop(){
		
		\Yii::$app->mongodb->createCommand()
		->addInsert(['name' => 'new'])
		->addInsert(['name' => 'old'])
		->addUpdate(['name' => 'new'], ['name' => 'updated'])
		->addDelete(['name' => 'old'])
		->executeBatch('room');
		
	}
	
	
	
	
	
}



