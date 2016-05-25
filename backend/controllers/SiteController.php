<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

use backend\controllers\BaseController;


/**
 * Site controller
 */
class SiteController extends BaseController
{
	public function __construct($id, $module = null)
	{
		parent::__construct($id, $module);

	}
	
	public $freeAccessActions = ['login', 'logout', 'confirm-registration-email', 'index'];
    /**
     * @inheritdoc
     */

	public function behaviors()
	{
	    return [
	        'ghost-access'=> [
	            'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
	        ],
	    ];
	}

    /**
     * @inheritdoc
     */
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
    	if ( Yii::$app->user->isGuest )
		{
			return $this->redirect("/user-management/auth/login");
		}
    	
        return $this->render('index');
    }
    public function actionTest()
    {
        return $this->render('index');
    }

}
