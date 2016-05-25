<?php
namespace common\models\articles;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

use common\models\Articles;

class ArticlesSearch extends Articles
{
	public function rules()
	{
		return [
			[['id', 'status'], 'integer'],
			[['name','text'], 'string'],
		];
	}
	
	public function scenarios()
	{
		return Model::scenarios();
	}
	
	public function search($params)
	{
		$query = Articles::find();

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

		$query->andFilterWhere(['like', 'name', $this->name]);
		$query->andFilterWhere(['like', 'text', $this->text]);
		
		return $dataProvider;
	}
   
}
