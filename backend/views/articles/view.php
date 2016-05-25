<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

use webvimark\modules\UserManagement\components\GhostHtml;
use webvimark\modules\UserManagement\UserManagementModule;

use common\models\Articles;

/**
 * @var yii\web\View $this
 * @var webvimark\modules\UserManagement\models\UserVisitLog $model
 */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Статьи', 'url' => ['index']];
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
			        	'value'=>Articles::getStatusValue($model->status)
					],
			        'date',
			        'created_at',
			        'updated_at',
			        'title',
			        'keywords',
			        'description',
			        'code',
			        'descr',
					[
			        	'attribute'=>'text',
			        	'format'=>'raw',
					],
				],
			]) ?>

		</div>
	</div>
</div>
