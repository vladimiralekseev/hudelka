<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use frontend\models\OrderForm;
use frontend\models\OrderPhoneForm;

/**
 * Site controller
 */
class BaseController extends Controller
{
	function init()
    {
    	$OrderForm = new OrderForm;
    	$OrderPhoneForm = new OrderPhoneForm;
    	
    	Yii::$app->params["OrderPhoneForm"] = $OrderPhoneForm;
    	Yii::$app->params["OrderForm"] = $OrderForm;
    	
		parent::init();
    }
    
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
}
