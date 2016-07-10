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
class Messages extends \yii\db\ActiveRecord
{
	    
    public static function getStatusList()
	{
		return array(
			self::STATUS_CLOSE => "Закрыт",
			self::STATUS_NEW => "Новый",
			self::STATUS_PHONE_1 => "Первый звонок",
			self::STATUS_PHONE_2 => "Второй звоток",
			self::STATUS_SEND => "Отправлен",
			self::STATUS_END => "Доставлен",
		);
	}

	public static function getStatusValue($val)
	{
		$ar = self::getStatusList();
		return isset( $ar[$val] ) ? $ar[$val] : $val;
	}
    
	public function sendSMS($hash, $mess)
	{
		$request_url = "http://dl.appclub.com.ua/ksExport/sms?key=501e4a141eb72835ddf9ebc7803fb5de&hash=".$hash."&mess=".urlencode($mess);
		//$request_url = "http://api.appclub.va.gointeractive.com.ua/ksExport/sms?key=501e4a141eb72835ddf9ebc7803fb5de&hash=f24e2710163086569bb8d5cea0d905f9&mess=123";
		file_get_contents($request_url);
	}
}
