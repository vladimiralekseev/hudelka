<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

use common\models\Orders;

?>
<div class="order">
	<h2>Попрощайтесь с лишними килограммами <span class="mark-new">навсегда!</span></h2>
    <?php if (!empty($orderSuccess)) {?>
    	<a id="order"></a>
        <div class="result-form">
        <h2><span class="mark-new">Заказ отправлен!<br/>Мы свяжемся с вами в ближайшее время.<br/><br/>Благадарим за заказ!</span></h2>
        </div>
    <?php } else {?>
	<div class="rows">
	<div class="row">
		<div class="col-sm-6">
            <h3>Заказать</h3>
            <h4>Внимание! осталось 27 банок!</h4>
            <h4 class="white">Успейте заказать!</h4>
            <br>
            <h4>Телефон для заказа</h4>
            <span class="order-sale white">+38 (096) 877 86 17</span>
            <span class="order-price js-price-discaunt"><?= Orders::DISCOUNT_PRICE_UA_1?> грн</span>
            <span class="order-sale"><em class="js-price">580 грн</em> Скидка <span class="js-percent-discaunt">50</span>%</span>
            <h4>Оплата при получении наличными Доставка по всей Украине от 3-х дней.<br><small>Стоимость доставки по всей Украине – 30 грн.</small></h4>
	</div>
	<div class="col-sm-6">
			<a id="order"></a>
            
            <?= $this->render('timer') ?>
            
            <div class="order-form">
            	<?php $form = ActiveForm::begin(['method'=>'post', 'action' => ['site/index', '#'=>'order'], 'id'=>'order-main']); ?>
			
				<div class="form">
				<?php /*?>
                             <div class="form__row">
                <div class="b-input-i">
                                    <select class="b-input" name="OrderForm[count]" id="count">

<option selected="selected" data-price1="290" data-price3="580" data-price2="580" data-pricecurrency="грн" value="1">1 упаковка</option>
<option data-price1="450" data-price3="1160" data-price2="1160" data-pricecurrency="грн" value="2">2 упаковки</option>
<option data-price1="590" data-price3="1740" data-price2="1740" data-pricecurrency="грн" value="3">3 упаковки</option>
                                   </select>
                </div>
              </div>
              <?*/?>
              	<?= $form->field($OrderForm, 'count')->dropDownList($OrderForm->getCountList())->label(false);?>

                <?= $form->field($OrderForm, 'fio')->textInput(['placeholder' => 'ФИО'])->label(false) ?>
				
				<?= $form->field($OrderForm, 'phone')->textInput(['placeholder' => 'Контактный телефон'])->label(false) ?>
              	
              	<?= $form->field($OrderForm, 'email')->textInput(['placeholder' => 'Email'])->label(false) ?>
                
                <?= Html::button(\Yii::t('app', 'Заказать'), ['class' => 'btn btn-red btn-big', 'type'=>'submit']) ?>

            </div>
            
        	<?php ActiveForm::end(); ?>
            
            </div>
		</div>
	</div>
	</div>
	<h4 class="white">Отправка заказов в Россию и страны СНГ ТОЛЬКО ПО ПРЕДОПЛАТЕ!!!</h4>
    <?php }?>
</div>