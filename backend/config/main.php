<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
	'name'=>'Похуделка',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules'=>[
	    'user-management' => [
	        'class' => 'webvimark\modules\UserManagement\UserManagementModule',
	
	        // Here you can set your handler to change layout for any controller or action
	        // Tip: you can use this event in any module
	        'on beforeAction'=>function(yii\base\ActionEvent $event) {
	                if ( $event->action->uniqueId == 'user-management/auth/login' )
	                {
	                    $event->action->controller->layout = 'loginLayout.php';
	                };
	            },
	    ],
	],
    'components' => [
		'urlManager'=>array(
            'enablePrettyUrl' => true,
        	'showScriptName'=>false,
            'rules'=>array(
                ''=>'site/index',
                'login'=>'site/login',
            ),
        ),
        'user' => [
	        'class' => 'webvimark\modules\UserManagement\components\UserConfig',
	
	        // Comment this if you don't want to record user logins
	        'on afterLogin' => function($event) {
	                \webvimark\modules\UserManagement\models\UserVisitLog::newVisitor($event->identity->id);
	            }
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
        /*'view' => [
	         'theme' => [
	             'pathMap' => [
	                '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
	             ],
	         ],
	    ],*/
        'i18n' => [
	        'translations' => [
	            'back*' => [
	                'class' => 'yii\i18n\PhpMessageSource',
	                //'basePath' => '@app/messages',
	                'sourceLanguage' => 'ru-RU',
        			'forceTranslation' => true,
	                'fileMap' => [
	                    'back'					=> 'back.php',
	                   	'app'					=> 'app.php',
	                    'app/error'				=> 'error.php',
	                    'back/banners'			=> 'banners.php',
	                    'back/stat'				=> 'stat.php',
	                    'back/stat-user-device'	=> 'stat-user-device.php',
	                    'back/section'			=> 'section.php',
	                    'back/publisher'		=> 'publisher.php',
	                    'back/developer'		=> 'developer.php',
	                    'back/device'			=> 'device.php',
	                    'back/synapsy-device'	=> 'synapsy-device.php',
	                    'back/gameloft-device'	=> 'gameloft-device.php',
	                    'back/complain'			=> 'complain.php',
	                    'back/supp-feedback'	=> 'support-feedback.php',
	                    'back/app-actual'		=> 'app-actual.php',
	                    'back/rate'				=> 'rate.php',
	                ],
	            ],
	        ]
	    ],
	    'imageProcessor' => [
		  'class' => '\phtamas\yii2\imageprocessor\Component',
		  // Default for all JPEG images
		  'jpegQuality' => 90,
		  // Default for all PNG images
		  'pngCompression' => 7,
		
		  // Create named image categories with their own configuration.
		  // You can refer them by name in application code.
		  'define' => [
		
		    'screensApp' => [
		      // Add transformations. They will be applied in the order they were defined.
		      'process' => [
		        // Fix images with embedded orientation metadata
		        ['autorotate'],
		        // Preapre image to crop by resizing it to cover a 160*160 square
		        ['resize', 'width' => 240, 'height' => 320, 'scaleTo' => 'cover'],
		        // Crop it
		        ['crop', 'width' => 240, 'height' => 320],
		      ],
		    ],
		
		    'previewApp' => [
		      // Add transformations. They will be applied in the order they were defined.
		      'process' => [
		        // Fix images with embedded orientation metadata
		        ['autorotate'],
		        // Preapre image to crop by resizing it to cover a 160*160 square
		        ['resize', 'width' => 72, 'height' => 72, 'scaleTo' => 'cover'],
		        // Crop it
		        ['crop', 'width' => 72, 'height' => 72],
		      ],
		    ],
		
		    'galleryImage' => [
		       // Override default to save some disk space and bandwidth
		      'jpegQuality' => 80,
		      'process' => [
		        // Resize proportionally to fit a 600*600 square but only if too large
		        ['resize', 'width' => 600, 'height' => 600, 'scaleTo' => 'fit', 'only' => 'down'],
		        // Mark your property
		        ['watermark', 'path' => '@path/to/wmark.png', 'align' => 'top-left', 'margin' => 20],
		      ],
		    ],
	  		
	  		'developerLogo' => [
  			  // Add transformations. They will be applied in the order they were defined.
  			  'process' => [
  				// Fix images with embedded orientation metadata
  				['autorotate'],
  				// Preapre image to crop by resizing it to cover a ...*... square
  				['resize', 'width' => 106, 'height' => 66, 'scaleTo' => 'cover'],
  				// Crop it
  				['crop', 'x' => 'center - ' . floor(106/2), 'y' => 'center - ' . floor(66/2), 'width' => 106, 'height' => 66],
  			  ],
	  		],
	  		
	  		'web.desktop.735x322' => [
  			  // Add transformations. They will be applied in the order they were defined.
  			  'process' => [
  				// Fix images with embedded orientation metadata
  				['autorotate'],
  				// Preapre image to crop by resizing it to cover a ...*... square
  				['resize', 'width' => 735, 'height' => 322, 'scaleTo' => 'cover'],
  				// Crop it
  				['crop', 'x' => 'center - ' . floor(735/2), 'y' => 'center - ' . floor(322/2), 'width' => 735, 'height' => 322],
  			  ],
	  		],
	  		
	  		'web.desktop.291x291' => [
  			  // Add transformations. They will be applied in the order they were defined.
  			  'process' => [
  				// Fix images with embedded orientation metadata
  				['autorotate'],
  				// Preapre image to crop by resizing it to cover a ...*... square
  				['resize', 'width' => 291, 'height' => 291, 'scaleTo' => 'cover'],
  				// Crop it
  				['crop', 'x' => 'center - ' . floor(291/2), 'y' => 'center - ' . floor(291/2), 'width' => 291, 'height' => 291],
  			  ],
	  		],
		  	'web.mobile.180x145' => [
		  		// Add transformations. They will be applied in the order they were defined.
		  		'process' => [
		  			// Fix images with embedded orientation metadata
		  			['autorotate'],
		  			// Preapre image to crop by resizing it to cover a ...*... square
		  			['resize', 'width' => 180, 'height' => 145, 'scaleTo' => 'cover'],
		  			// Crop it
		  			['crop', 'x' => 'center - ' . floor(180/2), 'y' => 'center - ' . floor(145/2), 'width' => 180, 'height' => 145],
		  		],
		  	],
	  		'web.mobile.100x100' => [
  			  // Add transformations. They will be applied in the order they were defined.
  			  'process' => [
  				// Fix images with embedded orientation metadata
  				['autorotate'],
  				// Preapre image to crop by resizing it to cover a ...*... square
  				['resize', 'width' => 100, 'height' => 100, 'scaleTo' => 'cover'],
  				// Crop it
  				['crop', 'x' => 'center - ' . floor(100/2), 'y' => 'center - ' . floor(100/2), 'width' => 100, 'height' => 100],
  			  ],
	  		],
	  		'web.static.60x60' => [ 
  			  // Add transformations. They will be applied in the order they were defined.
  			  'process' => [
  				// Fix images with embedded orientation metadata
  				['autorotate'],
  				// Preapre image to crop by resizing it to cover a ...*... square
  				['resize', 'width' => 60, 'height' => 60, 'scaleTo' => 'cover'],
  				// Crop it
  				['crop', 'x' => 'center - ' . floor(60/2), 'y' => 'center - ' . floor(60/2), 'width' => 60, 'height' => 60],
  			  ],
	  		],
	  		
	  		'wap.app.w480' => [
  			  // Add transformations. They will be applied in the order they were defined.
  			  'process' => [
  				// Fix images with embedded orientation metadata
  				['autorotate'],
  				// Preapre image to crop by resizing it to cover a ...*... square
  				['resize', 'width' => 225, 'height' => 140, 'scaleTo' => 'cover'],
  				// Crop it
  				['crop', 'x' => 'center - ' . floor(225/2), 'y' => 'center - ' . floor(140/2), 'width' => 225, 'height' => 140],
  			  ],
	  		],
	  		
	  		'wap.app.w480.retina' => [
  			  // Add transformations. They will be applied in the order they were defined.
  			  'process' => [
  				// Fix images with embedded orientation metadata
  				['autorotate'],
  				// Preapre image to crop by resizing it to cover a ...*... square
  				['resize', 'width' => 450, 'height' => 280, 'scaleTo' => 'cover'],
  				// Crop it
  				['crop', 'x' => 'center - ' . floor(450/2), 'y' => 'center - ' . floor(280/2), 'width' => 450, 'height' => 280],
  			  ],
	  		],
	  		
	  		'wap.app.w176' => [
  			  // Add transformations. They will be applied in the order they were defined.
  			  'process' => [
  				// Fix images with embedded orientation metadata
  				['autorotate'],
  				// Preapre image to crop by resizing it to cover a ...*... square
  				['resize', 'width' => 80, 'height' => 60, 'scaleTo' => 'cover'],
  				// Crop it
  				['crop', 'x' => 'center - ' . floor(80/2), 'y' => 'center - ' . floor(60/2), 'width' => 80, 'height' => 60],
  			  ],
	  		],
	  		
	  		'web.news.desktop.232x132.r10' => [
  			  // Add transformations. They will be applied in the order they were defined.
  			  'process' => [
  				// Fix images with embedded orientation metadata
  				['autorotate'],
  				// Preapre image to crop by resizing it to cover a ...*... square
  				['resize', 'width' => 232, 'height' => 132, 'scaleTo' => 'cover'],
  				// Crop it
  				['crop', 'x' => 'center - ' . floor(232/2), 'y' => 'center - ' . floor(132/2), 'width' => 232, 'height' => 132],
  			  ],
	  		],
			
		  ],
		],
    ],
    'params' => $params,
];
