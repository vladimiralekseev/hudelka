<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<?php if (!empty($orderSuccess)) {?>
	Мы свяжемся с вами в ближайшее время.<br/><br/>Благадарим за проявленный интерес!
	<?php $this->registerJS('$(".zakazat-zvonok").trigger("click")')?>
<?php } else {?>
<div class="form-data">
	<?php $form = ActiveForm::begin(['method'=>'post', 'action' => ['site/index', '#'=>'orderphone'], 'id'=>'orderphone-main']); ?>
	
	<?= $form->field($OrderPhoneForm, 'fio')?>
				
	<?= $form->field($OrderPhoneForm, 'phone')?>
	
	<p><small>Обратный звонок только по территории Украины<br><br></small></p>
	
	<div class="text-center"><button class="btn btn-red btn-big" type="submit">Заказать</button></div>
	<?php ActiveForm::end(); ?>
</div>
<?php }?>