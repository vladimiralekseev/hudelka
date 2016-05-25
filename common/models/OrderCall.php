<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "order_call".
 *
 * @property integer $id
 * @property string $fio
 * @property string $phone
 */
class OrderCall extends \yii\db\ActiveRecord
{
	const STATUS_CLOSE = 0;
	const STATUS_NEW = 1;
    const STATUS_PHONE_1 = 10;
    const STATUS_ORDER = 30;
    
    public static function getStatusList()
	{
		return array(
			self::STATUS_CLOSE => "Закрыт",
			self::STATUS_NEW => "Новый",
			self::STATUS_PHONE_1 => "Перезвонить",
			self::STATUS_ORDER => "Сформирован заказ",
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
        return 'order_call';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fio', 'phone', 'status'], 'required'],
            [['fio', 'phone'], 'string', 'max' => 128],
            [['created_at', 'updated_at'], 'safe'],
            [['status'], 'integer'],
            [['ip'], 'string', 'max' => 32],
            [['comments'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'phone' => 'Phone',
            'comments' => 'Comments',
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
