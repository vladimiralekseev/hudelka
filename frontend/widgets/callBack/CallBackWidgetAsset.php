<?php

namespace frontend\widgets\callBack;

use yii\web\AssetBundle;

class CallBackWidgetAsset extends AssetBundle
{
    public $js = [
        'js/call-back.js'
    ];

    public function init()
    {
        $this->sourcePath = __DIR__.'/assets';
        parent::init();
    }
}