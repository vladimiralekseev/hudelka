<?php
namespace frontend\models;

use Yii;
use yii\base\Model;

use common\models\Comments;

class CommentsForm extends Comments
{
    public function rules()
    {
        return array_merge(parent::rules(),[
        	[['re_captcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator::className()],
        ]);
    }
}
