<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property string $name
 * @property string $text
 * @property string $ip
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Comments extends \yii\db\ActiveRecord
{
	const STATUS_NOACTIVE = 0;
	const STATUS_ACTIVE = 1;
    
	public $re_captcha;
	
    public static function getStatusList()
	{
		return array(
			self::STATUS_NOACTIVE => "Отключен",
			self::STATUS_ACTIVE => "Активный",
		);
	}

	public static function getStatusValue($val)
	{
		$ar = self::getStatusList();
		return isset( $ar[$val] ) ? $ar[$val] : $val;
	}
	
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'default', "value"=>0],
            [['name'], 'required', 'message' => 'Имя обязательно для заполнения'],
            [['text'], 'required', 'message' => 'Комментарий обязателен для заполнения'],
            [['text'], 'string'],
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 128],
            [['ip'], 'string', 'max' => 16],
            [['ip'], 'default', "value"=>$_SERVER["REMOTE_ADDR"]],
            
            //[['re_captcha'], 'required', 'message' => 'Подтвердите что вы не робот'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'text' => 'Отзыв',
            'ip' => 'Ip',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    
	public function behaviors()
    {
       return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'updated_at',
                ],
                'value' => new Expression('NOW()'),
            ],
        ];
    }
}
