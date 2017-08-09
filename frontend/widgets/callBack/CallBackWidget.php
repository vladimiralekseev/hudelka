<?php

namespace frontend\widgets\callBack;

use Yii;
use yii\base\Widget;
use yii\base\Exception;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;

use frontend\models\OrderPhoneForm;

class CallBackWidget extends Widget
{
    protected function assetRegister()
    {
        $view = $this->getView();
        CallBackWidgetAsset::register($view);
    }
    
    
    public function init()
    {
        parent::init();
        
        $OrderPhoneForm = new OrderPhoneForm;
        
        $post = Yii::$app->request->post();
        
        if ($post && $OrderPhoneForm->load($post) && $OrderPhoneForm->send()) {
            $view = $this->getView();
            $view->context->redirect("/?orderphone=ok#orderphone");
            return false;
        }
    }
    
    
    public function run()
    {
        $this->assetRegister();
        
        $OrderPhoneForm = new OrderPhoneForm;
        
        $post = Yii::$app->request->post();
        
        $orderSuccess = !!Yii::$app->request->get('orderphone');
                
        //$this->view->registerJS('order.init('.Json::encode([OrderForm::PRICE_UA_1,OrderForm::PRICE_UA_2,OrderForm::PRICE_UA_3]).', '.Json::encode([OrderForm::DISCOUNT_PRICE_UA_1,OrderForm::DISCOUNT_PRICE_UA_2,OrderForm::DISCOUNT_PRICE_UA_3]).');');
        
        return $this->render('index', compact('OrderPhoneForm', 'orderSuccess'));
    }
}
