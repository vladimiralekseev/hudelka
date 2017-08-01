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
use common\models\Comments;

/**
 * Site controller
 */
class SiteController extends BaseController
{


    /**
     * @inheritdoc
     */
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

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $comments = Comments::find()->where(["status"=>Comments::STATUS_ACTIVE])->orderby("id desc")->limit(3)->asArray()->all();
        
    	return $this->render('index', compact('OrderForm','comments'));
    }
}
