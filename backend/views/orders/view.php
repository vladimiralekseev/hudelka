<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

use webvimark\modules\UserManagement\components\GhostHtml;
use webvimark\modules\UserManagement\UserManagementModule;

use common\models\Orders;

/**
 * @var yii\web\View $this
 * @var webvimark\modules\UserManagement\models\UserVisitLog $model
 */

$this->title = $model->id." - ".$model->fio;
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
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
			        	'value'=>Orders::getStatusValue($model->status)
					],
			        'count',
			        'fio',
			        'phone',
			        'address',
        			'email',
			        'comments',
			        'ip',
			        'created_at',
			        'updated_at',
			        'user_update',
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
