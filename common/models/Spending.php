<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

use common\models\User;
/**
 * This is the model class for table "spending".
 *
 * @property integer $id
 * @property string $name
 * @property string $descr
 * @property string $updated_at
 * @property string $created_at
 */
class Spending extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'spending';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'summ', 'descr', 'summ_debet', 'who_id'], 'required'],
            [['updated_at', 'created_at'], 'safe'],
            [['order_id','who_id'], 'integer'],
            [['summ', 'summ_debet'], 'number'],
            [['name'], 'string', 'max' => 128],
            [['descr'], 'string', 'max' => 2048]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'descr' => 'Описание',
            'summ' => 'Расход',
            'summ_debet' => 'Приход',
            'who_id' => 'Кому',
            'order_id' => 'ID Заказа',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
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
    

	public function getUser()
	{
	    return $this->hasOne(User::className(), ['id' => 'who_id']);
	}
}
