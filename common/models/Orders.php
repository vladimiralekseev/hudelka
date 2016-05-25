<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
/**
 * This is the model class for table "orders".
 *
 * @property integer $id
 * @property integer $status
 * @property string $fio
 * @property string $phone
 * @property integer $count
 * @property string $address
 * @property string $comments
 * @property string $ip
 * @property string $created_at
 * @property string $updated_at
 * @property integer $user_update
 */
class Orders extends \yii\db\ActiveRecord
{
	const STATUS_CLOSE = 0;
	const STATUS_NEW = 1;
    const STATUS_PHONE = 5;
    const STATUS_PHONE_1 = 10;
    const STATUS_PHONE_2 = 20;
    const STATUS_SEND = 30;
    const STATUS_END = 40;
    const STATUS_RETURN = 50;
    
    public static function getStatusList()
	{
		return array(
			self::STATUS_NEW => "Новый",
			self::STATUS_PHONE => "Недозвон",
			self::STATUS_SEND => "Отправлен",
			self::STATUS_END => "Доставлен",
			self::STATUS_RETURN => "Возврат",
			self::STATUS_CLOSE => "Спам",
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
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'fio', 'phone', 'count'], 'required'],
            [['status', 'count', 'user_update'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['fio','email'], 'string', 'max' => 128],
            [['phone'], 'string', 'max' => 64],
            [['address'], 'string', 'max' => 256],
            [['comments'], 'string', 'max' => 4096],
            [['ip'], 'string', 'max' => 16]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Статус',
            'fio' => 'ФИО',
            'phone' => 'Телефон',
            'count' => 'Кол-во',
            'address' => 'Адрес',
            'comments' => 'Коментарий',
            'ip' => 'Ip',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата изменения',
            'user_update' => 'Полледний изменивший',
            'email' => 'Email',
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
