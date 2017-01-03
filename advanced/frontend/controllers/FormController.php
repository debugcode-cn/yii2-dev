<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\TemForm;

class FormController extends Controller{
	
	public function actionIndex(){
		
// 		$tmpform = new TemForm();
		
		$load = \Yii::$app->request->post();
		
// 		$tmpform->load(\Yii::$app->request->post());
// 		print_r($load);
// 		die();
// 		echo json_encode($load);
		
		if($load){
			echo 'ok',gettype($load);
			
		}else{
			$errors = $tmpform->errors;
			echo $errors;
		}
		
	}
	
}