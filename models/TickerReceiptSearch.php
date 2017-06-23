<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TickerReceipt;

/**
 * TickerReceiptSearch represents the model behind the search form about `app\models\TickerReceipt`.
 */
class TickerReceiptSearch extends TickerReceipt
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_provider', 'id_truck', 'id_driver', 'quantity_chicken', 'quantity_cage', 'created_by', 'modified_by'], 'integer'],
            [['gross_weight', 'tare_weight', 'net_weight'], 'number'],
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
        $query = TickerReceipt::find();

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
            'id_provider' => $this->id_provider,
            'id_truck' => $this->id_truck,
            'id_driver' => $this->id_driver,
            'quantity_chicken' => $this->quantity_chicken,
            'gross_weight' => $this->gross_weight,
            'tare_weight' => $this->tare_weight,
            'net_weight' => $this->net_weight,
            'quantity_cage' => $this->quantity_cage,
            'created_by' => $this->created_by,
            'created' => $this->created,
            'modified_by' => $this->modified_by,
            'modified' => $this->modified,
        ]);

        $query->andFilterWhere(['like', 'code', $this->code]);

        return $dataProvider;
    }
}
