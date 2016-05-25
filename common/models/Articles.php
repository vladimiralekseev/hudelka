<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\SluggableBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

class Articles extends \yii\db\ActiveRecord
{
	const STATUS_NOACTIVE = 0;
	const STATUS_ACTIVE = 1;
    
    public static function getStatusList()
	{
		return array(
			self::STATUS_NOACTIVE => "Отключа",
			self::STATUS_ACTIVE => "Активна",
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
        return 'articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'descr', 'text', 'status'], 'required'],
            [['text'], 'string'],
            [['date', 'created_at', 'updated_at'], 'safe'],
            [['image_id'], 'integer'],
            [['title', 'code'], 'string', 'max' => 128],
            [['descr'], 'string', 'max' => 512],
            [['keywords'], 'string', 'max' => 300],
            [['description'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'title' => 'Title',
            'descr' => 'Descr',
            'text' => 'Text',
            'date' => 'Date',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
            'image_id' => 'Image ID',
            'keywords' => 'Keywords',
            'description' => 'Description',
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
            'code' => [
				'class' => SluggableBehavior::className(),
				'attribute' => 'title',
				'slugAttribute' => 'code',
				'ensureUnique' => true,
			],
        ];
    }
    	
	public static function detailURL($code = null)
    {
    	return "/health/".($code ? $code."/" : "");
    }  
}
