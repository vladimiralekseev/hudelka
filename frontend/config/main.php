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
    'bootstrap' => ['gii'],
      'modules' => [
          'gii' => ['class' => 'yii\gii\Module','allowedIPs'=>'176.36.195.214'],
    
      ],
    'components' => [
      	'urlManager'=>array(
            'enablePrettyUrl' => true,
        	'showScriptName'=>false,
      		'suffix' => '/',
            'rules'=>array(
            	'comments'					=> 'comments/index',
      			'health'					=> 'articles/index',
      			'health/<code:[\w\d\-]+>'	=> 'articles/detail',
      			
            ),
        ),
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
    ],
    'params' => $params,
];
