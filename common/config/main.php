<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'reCaptcha' => [
	        'name' => 'reCaptcha',
	        'class' => 'himiklab\yii2\recaptcha\ReCaptcha',
	        'siteKey' => '6LdPlBcTAAAAAI3T9-S4B08uCMT5q1PlnOIWgQnD',
	        'secret' => '6LdPlBcTAAAAANMycvxEPWnhMgKwg3_QnNpiHsVa',
	    ],
    ],
];
