<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\widgets\Menu;

$OrderPhoneForm = Yii::$app->params["OrderPhoneForm"];
$OrderForm = Yii::$app->params["OrderForm"];


AppAsset::register($this);

$menuItems = [
    ['label' => 'сироп', 'url' => ['site/index', '#'=>'']],
    ['label' => 'польза', 'url' => ['site/index', '#'=>'effect']],
    ['label' => 'экспертное мнение', 'url' => ['site/index', '#'=>'expert']],
    ['label' => 'состав', 'url' => ['site/index', '#'=>'composition']],
    ['label' => 'Свойства', 'url' => ['site/index', '#'=>'properties']],
    ['label' => 'отзывы', 'url' => ['site/index', '#'=>'reviews']],
    ['label' => 'Как заказать', 'url' => ['site/index', '#'=>'how-to-order']],
    ['label' => 'заказ и доставка', 'url' => ['site/index', '#'=>'order']],
];
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
<div id="body">
    <?= Menu::widget([
        'options' => ['class' => 'menu-top'],
        'encodeLabels' => false,
        'items' => $menuItems
    ]);?>
	<div class="fixed">
		<div class="header-part">
    		<div class="header-left">
    			<div class="header-decor01"><img src="/i/decor0122-2.png" alt=""></div>
    			<div class="header-girl"></div>
    			<div class="header-sticker"></div>
    			<div class="header-note">
                	<div>Инновационная формула нового натурального средства для похудения, без побочных эффектов и вреда для здоровья. ЗДОРОВОЕ ПОХУДЕНИЕ – НЕ МЕЧТА, А РЕАЛЬНОСТЬ!</div> 
    				<span class="star-text">* Результат зависит от индивидуального восприятия и может отличаться. Сироп не является лекарственным средством.</span>
    			</div>
    		</div>
			<div class="header-right">
				<h1 class="logo"><small>Сироп для похудения</small><br/>СТРОЙНИТИН</h1>
				<ul class="list">
                    <li>Сжигает жир</li>
                    <li>Снижает аппетит</li>
                    <li>Тонизирует и омолаживает</li>
				</ul>
				<h2 class="header-ttl">Здоровое похудение в каждой ложке</h2>
				<ul class="price">
                    <li>
                      <span class="top">Скидка</span>
                      <span><small>до</small> 67%</span> 
                      <span class="bottom">сегодня</span>
                    </li>
                    <li>
                      <span class="top">Цена</span>
                      <span>290 грн</span>
                      <span class="old bottom j-s_old_price_curs">580 грн</span>
                    </li>
				</ul>
				<div class="text-center">
					<a class="btn btn-red btn-big" href="#order">Заказать сейчас</a>
				</div>
				<div class="guaranty" id="guaranty-open"><a class="add-quote" data-toggle="modal" data-target="#guaranty" href="#guaranty"><img src="/i/guaranty-new.png" /></a></div>
				<?php Modal::begin([
                    'header' => '<h3>'.\Yii::t('app', 'Гарантия возврата денег').'</h3>',
                    'id' => 'guaranty',
                    'options' =>['class'=>'modal-guaranty'],
                ]);?>
                Eсли Вы приобрели препарат, но передумали его использовать Вы можете вернуть его в течении 1 месяца и получить обратно его полную стоимость, за исключением затрат на пересылку. При этом товар не должен быть вскрыт или использован. Если Вы возвращаете второй или третий флакон, который покупали по скидочной цене, тогда возвращается скидочная стоимость флакона, за исключением затрат на пересылку.
				<?php Modal::end();?>
			</div>
			
			<div class="bottls">
            	<div class="it it-1">
            		<div class="img"><img src="/i/b-1-3.png"></div>
            		<div class="price-old">580 <span>грн</span></div>
            		<div class="price-new">290 <span>грн / 1 шт</span></div>
    				<a class="btn btn-red btn-big" href="#order" data-count="1">Заказать</a>
            	</div>
            	<div class="it it-2">
            		<div class="img"><img src="/i/b-2-3.png"></div>
            		<div class="price-old">1160 <span>грн</span></div>
            		<div class="price-new">450 <span>грн / 2 шт</span></div>
    				<a class="btn btn-red btn-big" href="#order" data-count="2">Заказать</a>
            	</div>
            	<div class="it it-3">
            		<div class="img"><img src="/i/b-3-3.png"></div>
            		<div class="price-old">1740 <span>грн</span></div>
            		<div class="price-new">590 <span>грн / 3 шт</span></div>
    				<a class="btn btn-red btn-big" href="#order" data-count="3">Заказать</a>
            	</div>
            </div>
            
            <div class="star-text-2">* Результат зависит от индивидуального восприятия и может отличаться.<br>Сироп не является лекарственным средством.</div>
			
			<div class="price-new-10-block">
	        	<div class="price-new-10">1500 <span>грн / 10 шт</span><br/>
	        		<a class="btn btn-red btn-big" href="#" id="price10">Подробнее</a>
	        	</div>
	        </div>
			
		</div>
    </div>
    <div id="holder"></div>
</div>
    
    
<?php //= $content ?>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70716145-1', 'auto');
  ga('send', 'pageview');

</script>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
