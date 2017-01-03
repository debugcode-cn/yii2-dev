<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    	'mongodb'=>[
    		'class' => 'yii\mongodb\Connection',
    		'dsn'	=>	'mongodb://myhome:myhome@127.0.0.1:12345/myhome',
    	],
    ],
];
