<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;

use webvimark\modules\UserManagement\models\User;
use webvimark\modules\UserManagement\UserManagementModule;
use webvimark\extensions\BootstrapSwitch\BootstrapSwitch;

use common\models\Orders;
?>

<div class="user-form">

	<?php $form = ActiveForm::begin([
		'id'=>'Vacancies',
		'layout'=>'horizontal',
		'validateOnBlur' => false
	]);?>
	<?= $form->field($model, 'fio')->textInput(['maxlength' => 255, 'autocomplete'=>'off']) ?>
	<?= $form->field($model, 'phone')->textInput(['maxlength' => 255, 'autocomplete'=>'off']) ?>
	<?= $form->field($model, 'count')->textInput(['maxlength' => 255, 'autocomplete'=>'off']) ?>
	<?= $form->field($model->loadDefaultValues(), 'status')->dropDownList(Orders::getStatusList(), array("prompt"=>"")) ?>
	<?= $form->field($model, 'address')->textInput(['autocomplete'=>'off']) ?>
	<?= $form->field($model, 'email')->textInput(['autocomplete'=>'off']) ?>
	<?= $form->field($model, 'comments')->textArea(['rows' => '6']) ?>
	

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


