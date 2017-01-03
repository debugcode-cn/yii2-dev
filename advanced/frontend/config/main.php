<?php

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => 'csrf_frontend',
        ],
    	'cachememd' => [
    		'class'=>'yii\caching\MemCache',
    		"keyPrefix"=>"yiidev",
    		'servers'=>[
    			[
    				'host'=>'127.0.0.1',
    				'port'=>11211,
    				'weight'=>100,
    			],
    		],
    	],
    		
    	'redis' => [
    		'class' => 'yii\redis\Cache',
    		'redis' => [
    				'hostname' => '127.0.0.1',
    				'port' => 6379,
    				'database' => 0,
    		]
    	],
    		
    		
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend /==/ PHPSESSID
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    		
        /**/
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    		
    		
    ],
// http://www.yiidev.com/?r=blog/default without urlManager 
// http://www.yiidev.com/blog/default    with	 urlManager
	'modules' => [
		'blog' => [
				'class' => 'frontend\modules\blog\Index',
		],
	],
		
		
    'params' => $params,
];
