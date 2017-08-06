<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lot;

/**
 * LotSearch represents the model behind the search form about `app\models\Lot`.
 */
class LotSearch extends Lot
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_ticket_receipt', 'id_pigment', 'id_status', 'quantity_chicken', 'counter_1', 'counter_2', 'total', 'type_chicken', 'quantity_discard', 'created_by', 'modified_by'], 'integer'],
            [['code', 'comments', 'created', 'modified'], 'safe'],
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
        $query = Lot::find();

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
            'id_ticket_receipt' => $this->id_ticket_receipt,
            'id_pigment' => $this->id_pigment,
            'id_status' => $this->id_status,
            'quantity_chicken' => $this->quantity_chicken,
            'counter_1' => $this->counter_1,
            'counter_2' => $this->counter_2,
            'total' => $this->total,
            'type_chicken' => $this->type_chicken,
            'quantity_discard' => $this->quantity_discard,
            'created' => $this->created,
            'created_by' => $this->created_by,
            'modified' => $this->modified,
            'modified_by' => $this->modified_by,
        ]);

        $query->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'comments', $this->comments]);

        return $dataProvider;
    }
}
