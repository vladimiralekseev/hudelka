<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

use webvimark\modules\UserManagement\models\User;
use webvimark\extensions\BootstrapSwitch\BootstrapSwitch;
use webvimark\modules\UserManagement\UserManagementModule;

/**
 * @var yii\web\View $this
 * @var webvimark\modules\UserManagement\models\User $model
 */

$this->title = UserManagementModule::t('back', 'Editing').': ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Расход/Приход', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = UserManagementModule::t('back', 'Editing');
?>
<div class="user-update">

	<div class="panel panel-default">
		<div class="panel-body">
			<?= $this->render('_form', compact('model')) ?>
		</div>
	</div>

</div>