<?php
namespace frontend\controllers;

use Yii;


use \frontend\models\CommentsForm;

class CommentsController extends BaseController
{
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
    
    public function actionIndex()
    {
    	
    	//echo "<pre>"; var_dump($this->title); echo "</pre>";
    	//$this->pageTitle  = "Отзывы о сиропе Стройнитин";
    	
    	$model = new CommentsForm;
    	
    	$post = Yii::$app->request->post();
    	
    	if ($post && $model->load($post) && $model->save())
    	{
        	Yii::$app->session->setFlash('comments-success', "Благодарим за ваш коментарий");
        	return $this->redirect("/comments/#comment-added");
        }
        
        $comments = CommentsForm::find()->where(["status"=>CommentsForm::STATUS_ACTIVE])->orderby("id desc")->asArray()->all();
        
        return $this->render('index', compact('model', 'comments'));
        
    }
    
}
