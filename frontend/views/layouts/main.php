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

use frontend\widgets\order\OrderWidget;
use frontend\widgets\callBack\CallBackWidget;

$OrderPhoneForm = Yii::$app->params["OrderPhoneForm"];
$OrderForm = Yii::$app->params["OrderForm"];


AppAsset::register($this);

$menuItems = [
    ['label' => 'Cироп', 'url' => ['site/index', '#'=>'']],
    ['label' => 'Польза', 'url' => ['site/index', '#'=>'effect']],
    //['label' => 'Экспертное мнение', 'url' => ['site/index', '#'=>'expert']],
    ['label' => 'Состав', 'url' => ['site/index', '#'=>'composition']],
    ['label' => 'Свойства', 'url' => ['site/index', '#'=>'properties']],
    ['label' => 'Отзывы', 'url' => ['site/index', '#'=>'reviews']],
    ['label' => 'Как заказать', 'url' => ['site/index', '#'=>'how-to-order']],
    ['label' => 'Заказ и доставка', 'url' => ['site/index', '#'=>'order']],
];

$isMainPage = $this->context->module->controller->id == 'site' && $this->context->action->id == 'index';
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
    <meta name="google-site-verification" content="4QnHo5vDfpP4GM_WYaAPzcrGpMkktl9w4BtaFYYAqjI" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?= $this->render('main/menu-main', compact('menuItems')) ?>

<div id="body">
    <?= Menu::widget([
        'options' => ['class' => 'menu-top'],
        'encodeLabels' => false,
        'items' => $menuItems
    ]);?>
    <div class="header">
		<div class="menu-up-right">
			<a href="tel:+38-096-877-86-17"><span class="icon hudelka-phone"></span></a>
		</div>
		<a href="#" class="menu-bars-opener" id="menu-bars-opener"><span class="icon hudelka-bars"></span></a>
		<div class="logo">Стройнитин</div> 
				
	</div>
	<div class="header-holder"></div>
	<div class="fixed">
		<div class="header-part">
    		<div class="header-left">
    			<div class="header-decor01"><img src="/i/decor0122-2.png" alt=""></div>
    			<div class="header-girl"></div>
    			<div class="header-sticker"></div>
    			<?php if ($isMainPage) {?>
    			<div class="header-note">
                	<div>Инновационная формула нового натурального средства для похудения, без побочных эффектов и вреда для здоровья. ЗДОРОВОЕ ПОХУДЕНИЕ – НЕ МЕЧТА, А РЕАЛЬНОСТЬ!</div> 
    				<span class="star-text">* Результат зависит от индивидуального восприятия и может отличаться. Сироп не является лекарственным средством.</span>
    			</div>
    			<?php }?>
    		</div>
			<div class="header-right">
				<h1 class="logo"><small>Сироп для похудения</small><br/>СТРОЙНИТИН</h1>
				<?php if ($isMainPage) {?>
				<ul class="list">
                    <li>Сжигает жир</li>
                    <li>Снижает аппетит</li>
                    <li>Тонизирует и омолаживает</li>
				</ul>
				<?php }?>
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
				<div class="text-center order-now">
					<a class="btn btn-red btn-big" href="#order">Заказать сейчас</a>
				</div>
				<div class="guaranty" id="guaranty-open"><a class="add-quote" data-toggle="modal" data-target="#guaranty" href="#guaranty"><img src="/i/guaranty-new.png" alt="Гарантия качества, гарантия возврата денег" /></a></div>
				<?php Modal::begin([
                    'header' => '<h3>'.\Yii::t('app', 'Гарантия возврата денег').'</h3>',
                    'id' => 'guaranty',
                    'options' =>['class'=>'modal-guaranty'],
                ]);?>
                Eсли Вы приобрели препарат, но передумали его использовать Вы можете вернуть его в течении 1 месяца и получить обратно его полную стоимость, за исключением затрат на пересылку. При этом товар не должен быть вскрыт или использован. Если Вы возвращаете второй или третий флакон, который покупали по скидочной цене, тогда возвращается скидочная стоимость флакона, за исключением затрат на пересылку.
				<?php Modal::end();?>
			</div>
			<?php if ($isMainPage) {?>
				<?= $this->render('main/bottls') ?>
			<?php }?>
		</div>
		<?php if (!$isMainPage) {?>
			<div class="header-note-line"></div>
		<?php }?>
		
    	<?= $content ?>
    	
		<?= (new OrderWidget)->run() ?>
			
		<div class="zakazat-zvonok" data-toggle="modal" data-target="#call-back" href="#call-back"><img src="/i/zakazat_zvonok.png" alt="Обратный звонок"/></div>
    </div>
    <div id="holder"></div>
</div>
<div class="fixed">
	<div class="footer">
	<div class="rows">
	<div class="row">
		<div class="col-sm-6">
			<a target="_blank" href="/policy/">Политика конфиденциальности</a>. 
        	<p>Производитель: ФОП Теплова С.В.</p>
        	<p>Препарат изготовлен на мощностях: ООО «ЗДОРОВАЯ ЕДА»,<br> Украина, 61103, м. Харьков, пр. Ленина 47.</p>
		</div>
		<div class="col-sm-6 text-right">
			<p class="contact-phone-footer">Контактный телефон <b>+38 (096) 877 86 17</b>
  				<span>Email: <a href="mailto:stroynitin@gmail.com">stroynitin@gmail.com</a></span>
  			</p>
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

<?php Modal::begin([
    'header' => '<h3 class="text-center">'.\Yii::t('app', 'ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК').'</h3>',
    'id' => 'call-back',
    'options' =>['class'=>'modal-call-back'],
]);?>
<?= (new CallBackWidget)->run();?>
<?php Modal::end();?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
