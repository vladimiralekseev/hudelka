<?php 

use yii\bootstrap\Modal;
?>
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
		<a class="btn btn-red btn-big" data-toggle="modal" data-target="#opt" href="#opt">Подробнее</a>
	</div>
</div>

<?php Modal::begin([
    'header' => '<h3>'.\Yii::t('app', '10шт за 1500 грн').'</h3>',
    'id' => 'opt',
    'options' =>['class'=>'modal-opt'],
]);?>
У Вас есть уникальная возможность купить сиропы по супер-цене 150 грн. при заказе от 10 и более штук. Более подробная информация по телефону  +38 (096) 877 86 17
<?php Modal::end();?>