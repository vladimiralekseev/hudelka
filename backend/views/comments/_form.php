<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;

use webvimark\modules\UserManagement\models\User;
use webvimark\modules\UserManagement\UserManagementModule;
use webvimark\extensions\BootstrapSwitch\BootstrapSwitch;

use common\models\Comments;


use dosamigos\ckeditor\CKEditor;
?>

<div class="user-form">

	<?php $form = ActiveForm::begin([
		'id'=>'Vacancies',
		'layout'=>'horizontal',
		'validateOnBlur' => false
	]);?>
	<?= $form->field($model->loadDefaultValues(), 'status')->dropDownList(Comments::getStatusList(), array("prompt"=>"")) ?>
	<?= $form->field($model, 'name')->textInput(['maxlength' => 255, 'autocomplete'=>'off']) ?>
	<?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full', // basic, standard, full
    ]) ?>
	

	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
			<?php if ( $model->isNewRecord ): ?>
				<?= Html::submitButton(
					'<span class="glyphicon glyphicon-plus-sign"></span> ' . UserManagementModule::t('back', 'Create'),
					['class' => 'btn btn-success']
				) ?>
			<?php else: ?>
				<?= Html::submitButton(
					'<span class="glyphicon glyphicon-ok"></span> ' . UserManagementModule::t('back', 'Save'),
					['class' => 'btn btn-primary']
				) ?>
			<?php endif; ?>
		</div>
	</div>

	<?php ActiveForm::end(); ?>

</div>

<?php BootstrapSwitch::widget() ?>


