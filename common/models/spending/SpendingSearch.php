<?php
namespace common\models\spending;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

use common\models\Spending;

class SpendingSearch extends Spending
{
	public function rules()
	{
		return [
			[['id','who_id','order_id'], 'integer'],
			[['name','descr'], 'string'],
		];
	}
	
	public function scenarios()
	{
		return Model::scenarios();
	}
	
	public function search($params)
	{
		$query = Spending::find();

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
			'who_id' => $this->who_id,
			'order_id' => $this->order_id,
			'name' => $this->name,
			'descr' => $this->descr,
			
		]);

		$query->andFilterWhere(['like', 'name', $this->name]);
		$query->andFilterWhere(['like', 'descr', $this->descr]);
		
		return $dataProvider;
	}
   
}
