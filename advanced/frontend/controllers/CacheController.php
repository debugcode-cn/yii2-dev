<?php

namespace frontend\controllers;

use frontend\models\CacheDemo;
use yii\web\Controller;

class CacheController extends Controller{
	
	
	public function actionGo(){
		
		$camodel = new CacheDemo();
		
		if(null == $camodel->getCacheName()){
			$camodel->setCacheName();
		}
		
		$res = $camodel->getCacheName();
		echo $res;
		
		
	}
	
}