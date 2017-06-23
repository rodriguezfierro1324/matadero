<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Truck;

/**
 * TruckSearch represents the model behind the search form about `app\models\Truck`.
 */
class TruckSearch extends Truck
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_driver', 'created_by', 'modified_by'], 'integer'],
            [['licence_plate', 'created', 'modified'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Truck::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_driver' => $this->id_driver,
            'created_by' => $this->created_by,
            'created' => $this->created,
            'modified_by' => $this->modified_by,
            'modified' => $this->modified,
        ]);

        $query->andFilterWhere(['like', 'licence_plate', $this->licence_plate]);

        return $dataProvider;
    }
}
