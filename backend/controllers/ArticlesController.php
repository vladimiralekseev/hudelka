<?php

namespace backend\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use common\models\Articles;
use common\models\articles\ArticlesSearch;

class ArticlesController extends BaseController
{
	public $modelClass = 'common\models\Articles';
	
	public $modelSearchClass = 'common\models\articles\ArticlesSearch';
    
    public function behaviors()
    {
        return [
        	'ghost-access'=> [
	            'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
	        ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new $this->modelSearchClass;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderIsAjax('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

	public function actionCreate()
	{
		$model = new $this->modelClass;
		
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view',	'id' => $model->id]);
		}

		return $this->renderIsAjax('create', compact('model'));
	}

    protected function findModel($id)
    {
    	$modelClass = $this->modelClass;
        if (($model = $modelClass::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
