<?php

namespace frontend\widgets\order;

use yii\web\AssetBundle;

class OrderWidgetAsset extends AssetBundle
{
    public $js = [
        'js/order-form.js'
    ];

    public function init()
    {
        $this->sourcePath = __DIR__.'/assets';
        parent::init();
    }
}