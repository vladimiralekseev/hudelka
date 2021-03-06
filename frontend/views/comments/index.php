<?php 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = "Отзывы о сиропе Стройнитин";

$comments_success = Yii::$app->session->getFlash('comments-success');
?>
<div class="page comments">
	<div class="data">
	<div class="grad">
		<?php if ($comments) {?>
		<a id="comment-list" name="comment-list"></a>
		<h2>Отзывы о сиропе Стройнитин</h2>
		<div class="list">
			<?php foreach($comments as $comment){?>
			<div class="it">
				<div class="name"><?= $comment["name"]?></div>
				<div class="text"><?= $comment["text"]?></div>
			</div>
			<?php }?>
		</div>
		<?php }?>
		
		<a id="comment-added" name="comment-added"></a>
		
		<?php if ($comments_success) {?>
			<div class="comments-success"><?= $comments_success?></div>
		<?php } else {?>
		
			<h3>Добавьте отзыв</h3>
			<div class="comments-forma">
				<?php $form = ActiveForm::begin(['id' => 'comments', 'method'=>'post', "action"=>"#comment-added"]); ?>
					<?= $form->field($model, 'name')?>
					<?= $form->field($model, 'text')->textArea(["rows"=>5])?>
					<?= $form->field($model, 're_captcha')->widget(\himiklab\yii2\recaptcha\ReCaptcha::className())->label("") ?>
					<div class="submit"><button class="btn btn-red btn-big btn-green" type="submit">Отправить</button></div>
				<?php ActiveForm::end(); ?>
			</div>
		<?php }?>
	</div>
	</div>
</div>