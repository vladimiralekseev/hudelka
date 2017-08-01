<?php

namespace frontend\widgets\order;

use Yii;
use yii\base\Widget;
use yii\base\Exception;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;

use frontend\models\OrderForm;

class OrderWidget extends Widget
{
    protected function assetRegister()
    {
        $view = $this->getView();
        OrderWidgetAsset::register($view);
    }
    
    
    public function init()
    {
        parent::init();
        
        $OrderForm = new OrderForm;
        
        $post = Yii::$app->request->post();
        
        if ($post && $OrderForm->load($post) && $OrderForm->add()) {
            $view = $this->getView();
            $view->context->redirect("/?order=ok&count=".$OrderForm->count."#order");
            return false;
        }
    }
    
    
    public function run()
    {
        $this->assetRegister();
        
        $OrderForm = new OrderForm;
        
        $post = Yii::$app->request->post();
        
        $orderSuccess = !!Yii::$app->request->get('order');
                
        $this->view->registerJS('order.init('.Json::encode([OrderForm::PRICE_UA_1,OrderForm::PRICE_UA_2,OrderForm::PRICE_UA_3]).', '.Json::encode([OrderForm::DISCOUNT_PRICE_UA_1,OrderForm::DISCOUNT_PRICE_UA_2,OrderForm::DISCOUNT_PRICE_UA_3]).');');
        
        return $this->render('form', compact('OrderForm', 'orderSuccess'));
    }
}
