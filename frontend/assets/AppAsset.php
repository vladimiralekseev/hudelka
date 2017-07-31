<?php
namespace frontend\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    public $css = [
        'css/styles.css',
        'css/lightbox.css',
        'css/fonts/hudelka/styles.css',
    ]; 
    public $js = [
        'js/lightbox.js',
        'js/jquery.easing.min.js',
        'js/jquery.mobile.custom.min.js',
    	'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
