<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class CacheDemo extends Model{
	
	public $yiicache;
	
	//memcached 
// 	public function __construct(){
// 		$this->yiicache = \Yii::$app->cachememd;
// 	}
// 	public function setCacheName()
// 	{
// 		$this->yiicache->set('name', 'wlz',60);
// 		// sleep(50);
// 	}
// 	public function getCacheName()
// 	{
// 		$name = $this->yiicache->get('name');
// 		if($name != false){
// 			return  $name;
// 		}else{
// 			return null; 
// 		}
// 	}
	
	//redis
	public function __construct(){
		$this->yiicache = \Yii::$app->redis;
	}
	public function setCacheName()
	{
		$this->yiicache->set('name', 'wlz',60);
	}
	public function getCacheName()
	{
		$name = $this->yiicache->get('name');
		if($name != false){
			return  $name;
		}else{
			return null;
		}
	}
	
	
}