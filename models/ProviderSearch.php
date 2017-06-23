<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Provider;

/**
 * ProviderSearch represents the model behind the search form about `app\models\Provider`.
 */
class ProviderSearch extends Provider
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'email', 'quantity_cage', 'is_cage_own', 'created_by', 'modified_by'], 'integer'],
            [['name', 'phone', 'contact_name', 'ci', 'created', 'modified'], 'safe'],
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
        $query = Provider::find();

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
            'email' => $this->email,
            'quantity_cage' => $this->quantity_cage,
            'is_cage_own' => $this->is_cage_own,
            'created_by' => $this->created_by,
            'created' => $this->created,
            'modified_by' => $this->modified_by,
            'modified' => $this->modified,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'contact_name', $this->contact_name])
            ->andFilterWhere(['like', 'ci', $this->ci]);

        return $dataProvider;
    }
}
