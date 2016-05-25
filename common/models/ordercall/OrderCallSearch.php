<?php
namespace common\models\ordercall;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

use common\models\OrderCall;

class OrderCallSearch extends OrderCall
{
	public function rules()
	{
		return [
			[['id', 'phone', 'status'], 'integer'],
			[['fio'], 'string'],
		];
	}
	
	public function scenarios()
	{
		return Model::scenarios();
	}
	
	public function search($params)
	{
		$query = OrderCall::find();

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
			'pagination' => [
				'pageSize' => Yii::$app->request->cookies->getValue('_grid_page_size', 20),
			],
			'sort'=>[
				'defaultOrder'=>[
					'id'=>SORT_DESC,
				],
			],
		]);
		
		if (!($this->load($params) && $this->validate())) {
			return $dataProvider;
		}

		$query->andFilterWhere([
			'id' => $this->id,
			'status' => $this->status,
		]);

		$query->andFilterWhere(['like', 'fio', $this->fio]);
		$query->andFilterWhere(['like', 'phone', $this->phone]);
		
		return $dataProvider;
	}
   
}
