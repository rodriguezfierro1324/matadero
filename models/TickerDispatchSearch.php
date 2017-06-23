<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TickerDispatch;

/**
 * TickerDispatchSearch represents the model behind the search form about `app\models\TickerDispatch`.
 */
class TickerDispatchSearch extends TickerDispatch
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_lot', 'quantity', 'id_client', 'type_chicken', 'cage', 'id_truck', 'id_driver', 'created_by', 'modified_by'], 'integer'],
            [['weight'], 'number'],
            [['code', 'created', 'modified'], 'safe'],
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
        $query = TickerDispatch::find();

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
            'id_lot' => $this->id_lot,
            'quantity' => $this->quantity,
            'id_client' => $this->id_client,
            'weight' => $this->weight,
            'type_chicken' => $this->type_chicken,
            'cage' => $this->cage,
            'id_truck' => $this->id_truck,
            'id_driver' => $this->id_driver,
            'created_by' => $this->created_by,
            'created' => $this->created,
            'modified_by' => $this->modified_by,
            'modified' => $this->modified,
        ]);

        $query->andFilterWhere(['like', 'code', $this->code]);

        return $dataProvider;
    }
}
