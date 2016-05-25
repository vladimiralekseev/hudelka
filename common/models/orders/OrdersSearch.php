<?php
namespace common\models\orders;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

use common\models\Orders;

class OrdersSearch extends Orders
{
	public function rules()
	{
		return [
			[['id', 'phone', 'status', 'count'], 'integer'],
			[['fio','address'], 'string'],
		];
	}
	
	public function scenarios()
	{
		return Model::scenarios();
	}
	
	public function search($params)
	{
		$query = Orders::find();

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
			'count' => $this->count,
			
		]);

		$query->andFilterWhere(['like', 'fio', $this->fio]);
		$query->andFilterWhere(['like', 'phone', $this->phone]);
		$query->andFilterWhere(['like', 'address', $this->address]);
		
		return $dataProvider;
	}
   
}
