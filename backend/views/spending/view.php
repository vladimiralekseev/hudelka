<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

use webvimark\modules\UserManagement\components\GhostHtml;
use webvimark\modules\UserManagement\UserManagementModule;


/**
 * @var yii\web\View $this
 * @var webvimark\modules\UserManagement\models\UserVisitLog $model
 */

$this->title = $model->id." - ".$model->name;
$this->params['breadcrumbs'][] = ['label' => 'Расход/Приход', 'url' => ['index']];
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
			        'name',
			        'summ',
			        'summ_debet',
			        [
						'attribute'=>'who_id',
						'value'=>\common\models\User::findOne($model->who_id)['username'],
					],
			        'order_id',
			        'descr',
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
