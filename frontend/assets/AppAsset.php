<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style_new.css?v=1',
        'css/lightbox.css',
    ]; 
    public $js = [
    	//'js/jquery-1.11.3.min.js',
    	//'js/common_new.js',
    	//'js/code.js',
    	//'js/mask22.js',
    	//'js/script22.js',
    	'js/lightbox.js',
    	'js/script.js?v=1',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
