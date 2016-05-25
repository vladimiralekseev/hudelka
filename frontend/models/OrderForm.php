<?php
namespace frontend\models;

use common\models\User;
use common\models\Orders;
use common\models\Messages;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class OrderForm extends Orders
{
    public $fio;
    public $count;
    public $phone;
    public $email;

    public function rules()
    {
        return [
            [['fio','count','phone'], 'required'],
            [['email'], 'string', 'max' => 128],
            [['email'], 'email'],
        ];
    }

    public function add()
    {
    	if ($this->validate())
        {
        	$orders = new Orders;
        	$orders->status = 1;
        	$orders->fio = $this->fio;
        	$orders->phone = $this->phone;
        	$orders->email = $this->email;
        	$orders->count = (int)$this->count;
        	$orders->ip = $_SERVER["REMOTE_ADDR"];
        	$orders->save();
        	$message = "Похуделка. New order! #".$orders->id.
        		"\n\rFIO: ".$orders->fio.
        		"\n\rPhone: ".$orders->phone.
        		"\n\rCount: ".$orders->count.
        		"\n\rEmail: ".$orders->email
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
