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
            	'/'					=> 'site/index',
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
        'view' => [
            'class' => '\rmrevin\yii\minify\View',
            'enableMinify' => !YII_DEBUG,
            'concatCss' => false, // concatenate css
            'minifyCss' => true, // minificate css
            'concatJs' => false, // concatenate js
            'minifyJs' => true, // minificate js
            'minifyOutput' => true, // minificate result html page
            'webPath' => '@web', // path alias to web base
            'basePath' => '@webroot', // path alias to web base
            'minifyPath' => '@webroot/minify', // path alias to save minify result
            //'jsPosition' => [\yii\web\View::POS_END], // positions of js files to be minified
            'forceCharset' => 'UTF-8', // charset forcibly assign, otherwise will use all of the files found charset
            'expandImports' => true, // whether to change @import on content
            'compressOptions' => ['extra' => true], // options for compress
            'excludeFiles' => [
                //'jquery.js', // exclude this file from minification
                //'app-[^.].js', // you may use regexp
            ],
            'excludeBundles' => [
                //\dev\helloworld\AssetBundle::class, // exclude this bundle from minification
            ],
        ],
    ],
    'params' => $params,
];
