<?php
namespace frontend\controllers;

use Yii;

use \common\models\Articles;

class ArticlesController extends BaseController
{
	public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    
    public function actionIndex()
    {
    	$models = Articles::find()->where(["status"=>Articles::STATUS_ACTIVE])->orderby("date desc")->all();
    	return $this->render('index', compact('models'));
    }
    
    public function actionDetail($code)
    {
    	$model = Articles::find()->where(["status"=>Articles::STATUS_ACTIVE, "code"=>$code])->orderby("date desc")->asArray()->one();
        
    	if(!$model)
    		throw new NotFoundHttpException;
        
        return $this->render('detail', compact('model'));
    }
}
