<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Discard;

/**
 * DiscardSearch represents the model behind the search form about `app\models\Discard`.
 */
class DiscardSearch extends Discard
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_type_discard', 'comments', 'id_status', 'created', 'created_by', 'modified', 'modified_by'], 'integer'],
            [['weight'], 'number'],
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
        $query = Discard::find();

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
            'id_type_discard' => $this->id_type_discard,
            'weight' => $this->weight,
            'comments' => $this->comments,
            'id_status' => $this->id_status,
            'created' => $this->created,
            'created_by' => $this->created_by,
            'modified' => $this->modified,
            'modified_by' => $this->modified_by,
        ]);

        return $dataProvider;
    }
}
