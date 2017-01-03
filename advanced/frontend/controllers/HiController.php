<?php
namespace frontend\controllers;

// use Yii;
// use yii\base\InvalidParamException;
// use yii\web\BadRequestHttpException;
use yii\web\Controller;
// use yii\filters\VerbFilter;
// use yii\filters\AccessControl;
// use common\models\LoginForm;
// use frontend\models\PasswordResetRequestForm;
// use frontend\models\ResetPasswordForm;
// use frontend\models\SignupForm;
// use frontend\models\ContactForm;

/**
 * hi controller
 */

class HiController extends Controller
{
    /**
     * @inheritdoc
     */
    
    public function actionIndex($name=''){
    	echo $name;
    	$request =  \Yii::$app->request;
    	
    	if($request->isGet){
    		echo 'is get request';
    	}else{
    		echo 'not get type';
    	}
    	print_r(unserialize('a:2:{i:0;i:11;i:1;i:12;}'));
    	echo PHP_EOL;

    }
    
    public function actionSession(){
    	header('content-type:text/html;charset=utf8');
    	error_reporting(E_ALL);
    	$sess = \Yii::$app->session;
    	
    	if($sess->isActive){
    		echo 'session is op';
    	}else{
    		echo 'session is cl';
    		$sess->open();
    	}
    	
    	$sess->set('name', 'xiaolei');
    	
    	echo $sess->get('name');
    	echo "<br/>";
    	echo $sess->id;
//     	echo "<br/>";
//     	print_r(unserialize('__flash|a:0:{}name|s:7:"xiaolei";'));  //wrong
    }
    
    public function actionFk(){
    	return $this->render('sendajax');
    }
    
    
    
    
    
    
    
    
}





























