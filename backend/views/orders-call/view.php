<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

use webvimark\modules\UserManagement\components\GhostHtml;
use webvimark\modules\UserManagement\UserManagementModule;

use common\models\OrderCall;

/**
 * @var yii\web\View $this
 * @var webvimark\modules\UserManagement\models\UserVisitLog $model
 */

$this->title = $model->id." - ".$model->fio;
$this->params['breadcrumbs'][] = ['label' => 'Заказ обранного звонка', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="user-visit-log-view">

	<div class="panel panel-default">
		<div class="panel-body">

			<p>
				<?= GhostHtml::a(UserManagementModule::t('back', 'Edit'), ['update', 'id' => $model->id], ['class' => 'btn btn-sm btn-primary']) ?>
			</p>
			<?= DetailView::widget([
				'model' => $model,
				'attributes' => [
					'id',
					[
			        	'attribute'=>'status',
			        	'value'=>OrderCall::getStatusValue($model->status)
					],
			        'fio',
			        'phone',
			        'comments',
			        'ip',
			        'created_at',
			        'updated_at',
			        /*[
			        	'attribute'=>'disabled',
			        	'value'=>GreenhouseUsers::getStatusDisabledValue($model->disabled)
					],
			        [
			        	'attribute'=>'site_admin',
			        	'value'=>GreenhouseUsers::getStatusSAValue($model->site_admin)
					],
					*/
					
				],
			]) ?>

		</div>
	</div>
</div>
