<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Fee;

/**
 * FeeSearch represents the model behind the search form of `backend\models\Fee`.
 */
class FeeSearch extends Fee
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fee_id', 'fee_std_id', 'fee_amount_received'], 'integer'],
            [['fee_description', 'fee_receiving_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Fee::find();

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
            'fee_id' => $this->fee_id,
            'fee_std_id' => $this->fee_std_id,
            'fee_amount_received' => $this->fee_amount_received,
            'fee_receiving_date' => $this->fee_receiving_date,
        ]);

        $query->andFilterWhere(['like', 'fee_description', $this->fee_description]);

        return $dataProvider;
    }
}
