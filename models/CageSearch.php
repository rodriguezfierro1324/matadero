<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cage;

/**
 * CageSearch represents the model behind the search form about `app\models\Cage`.
 */
class CageSearch extends Cage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_status', 'quantity', 'id_provider', 'operation', 'created_by', 'modified_by'], 'integer'],
            [['created', 'modified'], 'safe'],
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
        $query = Cage::find();

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
            'id_status' => $this->id_status,
            'quantity' => $this->quantity,
            'id_provider' => $this->id_provider,
            'operation' => $this->operation,
            'created' => $this->created,
            'created_by' => $this->created_by,
            'modified' => $this->modified,
            'modified_by' => $this->modified_by,
        ]);

        return $dataProvider;
    }
}
