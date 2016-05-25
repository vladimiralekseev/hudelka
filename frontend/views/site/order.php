<?
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<a name="order"></a>
<a name="order_all" id="order_all"></a>
      <div class="order">

        <h2>Попрощайтесь с лишними килограммами <span class="mark-new">навсегда!</span><br>
         <!--span class="mark js_price_diff"></span--></h2>
<?//$order_success = Yii::$app->session->getFlash('order-success');?>
<?if($_GET["order"] == "ok"){?>
<div class="result-form">
<h2><span class="mark-new">Заказ отправлен!<br/>Мы свяжемся с вами в ближайшее время.<br/><br/>Благадарим за заказ!</span></h2>
</div>
<?}else{?>

        <div class="line">
          <div class="order__left">
            <h3>Заказать</h3>
            <h4>Внимание! осталось 27 банок!</h4>
            <h4 class="white">Успейте заказать!</h4>
            <br>
            <h4>Телефон для заказа</h4>
            <span class="order__sale white">+38 (096) 877 86 17</span>
            <span class="order__price">
              <strong class="price_act js_new_price_curs">290 грн</strong>
            </span>
            <span class="order__sale"><em class="fool_price js_old_price_curs">580 грн</em> Скидка <span class="js_old_percent_curs">50</span>%</span>
            <h4>Оплата при получении наличными Доставка по всей Украине от 3-х дней.<br><small>Стоимость доставки по всей Украине – 30 грн.</small></h4>
          </div>
          <div class="order__right">
            <div class="timer">
              <strong class="timer__txt">До завершения акции осталось</strong>
              <div class="timer__box">
                <div id="clock" class="countdownHolder">
                  <span class="countHours">
                    <span id="hour" class="wrap">
                      <span class="position">
                        <span id="hour_0">1</span>
                      </span>
                      <span class="position">
                        <span id="hour_1">6</span>
                      </span>
                    </span>
                    <span class="timer__txt">часов</span>
                  </span>
                  <span class="countDiv countDivHours"></span>
                    <span class="countMinutes">
                    <span id="min" class="wrap">
                      <span class="position">
                        <span id="min_0">2</span>
                      </span>
                      <span class="position">
                        <span style="margin-top: 0px; opacity: 1;" id="min_1">0</span>
                      </span>
                    </span>
                    <span class="timer__txt">Минут</span>
                  </span>
                  <span class="countDiv countDivMinutes"></span>
                  <span class="countSeconds">
                    <span id="sec" class="wrap">
                      <span class="position">
                        <span style="margin-top: 0px; opacity: 1;" id="sec_0">5</span>
                      </span>
                      <span class="position">
                        <span style="margin-top: -2.44718px; opacity: 0.877641;" id="sec_1">5</span>
                      </span>
                    </span>
                    <span class="timer__txt">секунд</span>
                  </span>
                </div>
              </div>
            </div>
            <?//$form = ActiveForm::begin(['id' => 'order_main', 'method'=>'post', "action"=>"/#order", 'enableClientScript' => false]); ?>
            <?$form = ActiveForm::begin(['id' => 'order_main', 'method'=>'post', "action"=>"/#order"]); ?>
                   
			
			                        <div class="form">
                             <div class="form__row">
                <div class="b-input-i">
                                    <select class="b-input" name="OrderForm[count]" id="count">

<option selected="selected" price1="290" price3="580" price2="580" pricecurrency=" грн" value="1">1 упаковка</option>
<option price1="450" price3="1160" price2="1160" pricecurrency=" грн" value="2">2 упаковки</option>
<option price1="590" price3="1740" price2="1740" pricecurrency=" грн" value="3">3 упаковки</option>
                                   </select>
                </div>
              </div>
              <div class="form__row">
                <div class="b-input-i">
                	<?= $form->field($OrderForm, 'fio')->textInput(['autocomplete'=>'off',  'placeholder'=>"ФИО", 'class'=>'b-input'])->label("") ?>
                </div>
              </div>
              <div class="form__row">
                <div class="b-input-i">
                	<?= $form->field($OrderForm, 'phone')->textInput(['autocomplete'=>'off', 'placeholder'=>"Контактный телефон", 'class'=>'b-input'])->label("") ?>
                </div>
              </div>
              <div class="form__row">
                <div class="b-input-i">
                	<?= $form->field($OrderForm, 'email')->textInput(['autocomplete'=>'off', 'placeholder'=>"Email", 'class'=>'b-input'])->label("") ?>
                </div>
              </div>
              <div class="btn__holder">
                <input class="btn btn_submit js_submit" value="Заказать" type="submit">
              </div>
            </div>

            <?php ActiveForm::end(); ?>

          </div>
        </div>
       <?}?>
      </div>