<?
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;

use webvimark\extensions\GridBulkActions\GridBulkActions;
use webvimark\extensions\GridPageSize\GridPageSize;
use webvimark\modules\UserManagement\components\GhostHtml;
use webvimark\modules\UserManagement\UserManagementModule;

use common\models\Orders;
use common\models\User;

class PTotal
{
	public static function colTotal($provider, $fieldName)
	{
	    $total=0;
	    foreach($provider as $item){
	        $total+=$item[$fieldName];
	    }
	    return $total;
	}
	public static function total($provider)
	{
	    $total=0;
	    foreach($provider as $item){
	        $total+=$item->summ_debet - $item->summ;
	    }
	    return $total;
	}
}


	$actionColumn = [
		'class' => 'yii\grid\ActionColumn',
		'contentOptions' => ['style' => 'width:70px; text-align:center;'],
		'template' => '{view}{update}',
	];


$this->title = 'Расход/Приход';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-visit-log-index">

	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<div class="col-sm-6">
					<p>
		<?= GhostHtml::a(UserManagementModule::t('back', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
			</p>
			</div>
	
			<div class="col-sm-6 text-right">
				<?= GridPageSize::widget(['pjaxId'=>'app-grid-pjax']) ?>
			</div>
		</div>
		<?php Pjax::begin([
				'id'=>'app-grid-pjax',
			]) ?>

<?= GridView::widget([
	'id' => 'app-grid',
    'dataProvider' => $dataProvider,
	'layout' => '{items}<div class="row"><div class="col-sm-8">{pager}</div><div class="col-sm-4 text-right">{summary}</div></div>',
	'filterModel' => $searchModel,
	'showFooter'=>true,
	'footerRowOptions'=>['style'=>'font-weight:bold;'],
	'pager'=>[
		'options'=>['class'=>'pagination pagination-sm'],
		'hideOnSinglePage'=>true,
		'lastPageLabel'=>'>>',
		'firstPageLabel'=>'<<',
	],
	'rowOptions'=>function($model)
	{
		if($model->summ > $model->summ_debet)
		{
			return ['class' => 'danger'];
		}
		if($model->summ < $model->summ_debet)
		{
			return ['class' => 'success'];
		}
    },
    'columns' => [
       [
			'attribute'=>'id',
			'value'=>function($model){
				return Html::a($model->id, ['view', 'id'=>$model->id], ['data-pjax'=>0]);
			},
			'format'=>'raw',
		],
        'name',
        'descr',
        [
		    'attribute' => 'summ_debet',
		    'footer'=>PTotal::colTotal($dataProvider->models,'summ_debet'),
		],
        [
		    'attribute' => 'summ',
        	'value'=>function($model){
				return -$model->summ;
			},
		    'footer'=>-PTotal::colTotal($dataProvider->models,'summ'),
		],
		[
        	//'class' => 'yii\grid\SerialColumn',
        	'attribute'=>'zz',
        	'header'=>'Всего',
			'value'=>function($model){
				return $model->summ_debet - $model->summ;
			},
			'footer'=>PTotal::total($dataProvider->models),
        ],
        [
        	'attribute'=>'who_id',
        	'value'=>'user.username',
        	'filter'=>ArrayHelper::map(User::find()->orderby("username")->asArray()->all(),'id', 'username'),
		],
        [
			'attribute'=>'order_id',
			'value'=>function($model){
				return Html::a($model->order_id, ['orders/view', 'id'=>$model->order_id], ['data-pjax'=>0]);
			},
			'format'=>'raw',
		],
        'created_at',
        'updated_at',
        /*[
        	'attribute'=>'site_admin',
        	'filter'=>GreenhouseUsers::getStatusSAList(),
			'value'=>function($model){
				return GreenhouseUsers::getStatusSAValue($model->site_admin);
			},
		],
		[
        	'attribute'=>'disabled',
        	'filter'=>GreenhouseUsers::getStatusDisabledList(),
			'value'=>function($model){
				return GreenhouseUsers::getStatusDisabledValue($model->disabled);
			},
		],
		*/
        
		$actionColumn,
		
    ],
]) ?>

<?php Pjax::end() ?>
</div>
</div>
</div>