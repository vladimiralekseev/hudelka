<?php
namespace frontend\models;

use common\models\User;
use common\models\OrderCall;
use common\models\Messages;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class OrderPhoneForm extends Model
{
    public $fio;
    public $phone;

    public function rules()
    {
        return [
            [['fio'], 'required', 'message'=>'Укажите имя'],
            [['phone'], 'required', 'message'=>'Укажите номер телефона'], 
        ];
    }

    public function send()
    {
        if ($this->validate())
        {
        	$orders = new OrderCall;
        	$orders->status = 1;
        	$orders->fio = $this->fio;
        	$orders->phone = $this->phone;
        	$orders->ip = $_SERVER["REMOTE_ADDR"];
        	$orders->save();
        	
        	$message = "Похуделка. Обратный звонок! #".$orders->id.
        		"\n\rИмя: ".$orders->fio.
        		"\n\rНомер: ".$orders->phone
        	;
        	
        	$Messages = new Messages;
        	$Messages->sendSMS("f24e2710163086569bb8d5cea0d905f9", $message); //я
        	$Messages->sendSMS("57d8b7aa231bccb7efcee232b22d2c01", $message); //Наташа
        	$Messages->sendSMS("402900dd710024bf944d311e66bf0cbc", $message); //Ира
        	
        	return true;
        }
        return null;
    }
}
