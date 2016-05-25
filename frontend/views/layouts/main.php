<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

$OrderPhoneForm = Yii::$app->params["OrderPhoneForm"];
$OrderForm = Yii::$app->params["OrderForm"];


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="google-site-verification" content="4QnHo5vDfpP4GM_WYaAPzcrGpMkktl9w4BtaFYYAqjI" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
       

<?php $this->beginBody() ?>
<?php
    $menuItems = [
        ['label' => 'сироп', 'url' => ['/#']],
        ['label' => 'польза', 'url' => ['/#effect']],
        ['label' => 'экспертное мнение', 'url' => ['/#expert']],
        ['label' => 'состав', 'url' => ['#composition']],
        ['label' => 'Свойства', 'url' => ['#properties']],
        ['label' => 'отзывы', 'url' => ['#reviews']],
        ['label' => 'Как заказать', 'url' => ['#how-to-order']],
        ['label' => 'заказ и доставка', 'url' => ['#order']],
    ];
    
    ?>

    
<div class="wrap">
  <div class="navigation-new">
    <div class="case">
      <ul class="nav-new">
        <li><a href="/#">сироп</a></li>
        <li><a href="/#effect">польза</a></li>
        <li><a href="/#expert">экспертное мнение</a></li>
        <li><a href="/#composition">состав</a></li>
        <li><a href="/#properties">Свойства</a></li>
        <li><a href="/#info">Важная информация!</a></li>
        <li><a href="/#reviews">отзывы</a></li>
        <li><a href="/#how-to-order">Как заказать</a></li>
        <li><a href="/#order">заказ и доставка</a></li>
      </ul>
    </div>
  </div>
	<div class="case">
	
	
	
	
		<?
		
		if($_SERVER["REQUEST_URI"] == "/"){
			echo $this->render('header-page-main.php');
		}else{
			echo $this->render('header-page.php');
		}?>
		<?= $content ?>
		<?= $this->render('../site/who-to-order');?>
		<?= $this->render('../site/order', compact('OrderForm','order_success'));?>
      <div class="ftr">
      	<p class="contact-phone-footer">Контактный телефон <b>+38 (096) 877 86 17</b>
      	
      	<span>Email: <a href="mailto:stroynitin@gmail.com">stroynitin@gmail.com</a></span>
      	</p>
          <a target="_blank" href="/policy/">Политика конфиденциальности</a>. 
          <p>Производитель: ФОП Теплова С.В.</p>
          <p>Препарат изготовлен на мощностях: ООО «ЗДОРОВАЯ ЕДА»,<br> Украина, 61103, м. Харьков, пр. Ленина 47.</p>
      </div>
   </div>
  
  
</div>

<div class="link-to-up"><a href="#"><span class="icon ibranson-fontawesome-webfont-13" style="height:10px;display:block;"></span><span class="name">вверх</span></a></div>

<div class="popup guaranty-popup" id="guaranty-popup">
	<div class="popup-fon"></div>
	<div class="popup-border">
		<div class="popup-data">
			<a class="popup-close">x</a>
			<h3>Гарантия возврата денег</h3>
			<div class="rows">
				<div class="row">
					<div class="col-xs-12">
						<div class="form-data">
						<br>
						<p>Eсли Вы приобрели препарат, но передумали его использовать Вы можете вернуть его в течении 1 месяца и получить обратно его полную стоимость, за исключением затрат на пересылку. При этом товар не должен быть вскрыт или использован. Если Вы возвращаете второй или третий флакон, который покупали по скидочной цене, тогда возвращается скидочная стоимость флакона, за исключением затрат на пересылку.					
						</p>
						</div>
					</div>
					
				</div>
			</div>
			<?/*?><div class="popup-foot">
				Don't have an account? <a href="/signup/">Sign Up</a>
			</div>
			<?*/?>
		</div>
	</div>
</div>


<div class="popup order-phone-popup" id="order-phone-popup">
	<div class="popup-fon"></div>
	<div class="popup-border">
		<div class="popup-data">
			<a class="popup-close">x</a>
			<h3>Заказать обратный звонок</h3>
			<div class="rows">
				<div class="row">
					<div class="col-xs-12">
						<div class="form-data">
						<?//$order_phone_success = Yii::$app->session->getFlash('order-phone-success');?>
						<?if($_GET["orderphone"] == "ok"){?>
							Мы свяжемся с вами в ближайшее время.<br/><br/>Благадарим за проявленный интерес!
						<?}else{?>
							<?$form = ActiveForm::begin(['id' => 'order_phone', 'method'=>'post', "action"=>"/?orderphone=ok"]); ?>
								<?= $form->field($OrderPhoneForm, 'fio')->label("Имя")?>
								<?= $form->field($OrderPhoneForm, 'phone')->label("Контактный номер")?>
								<p><small>Обратный звонок только по территории Украины<br/><br/></small></p>
								<button class="btn btn_submit" type="submit">Заказать</button>
							<?php ActiveForm::end(); ?>
						<?}?>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70716145-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter34211345 = new Ya.Metrika({
                    id:34211345,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/34211345" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<?php $this->endBody() ?>
<?if($_GET["orderphone"] == "ok"){?>
<script>
$(function(){
	popup.open($("#order-phone-popup"))
})
</script>
<?}?>

</body>
</html>
<?php $this->endPage() ?>
