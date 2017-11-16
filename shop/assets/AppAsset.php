<?php
namespace shop\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    public $css = [
        '//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic%7CPT+Gudea:400,700,400italic%7CPT+Oswald:400,700,300',
        'css/font-awesome.min.css',
        'css/prettyPhoto.css',
        'css/colpick.css',
        'css/revslider.css',
        'css/owl.carousel.css',
        'css/style.css',
        'css/responsive.css',
        //'css/styles.css',
    ]; 
    public $js = [
        'js/smoothscroll.js',
        'js/jquery.debouncedresize.js',
        'js/retina.min.js',
        'js/jquery.placeholder.js',
        'js/jquery.hoverIntent.min.js',
        //'js/jquery.tweet.min.js',
        'js/jquery.flexslider-min.js',
        'js/owl.carousel.min.js',
        'js/jflickrfeed.min.js',
        'js/jquery.prettyPhoto.js',
        'js/jquery.themepunch.tools.min.js',
        'js/jquery.themepunch.revolution.min.js',
        'js/colpick.js',
        'js/main.js',
        //'js/script.js',
        
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
