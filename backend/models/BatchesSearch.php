<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Batches;

/**
 * BatchesSearch represents the model behind the search form of `backend\models\Batches`.
 */
class BatchesSearch extends Batches
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['batch_id'], 'integer'],
            [['batch_name', 'batch_course_id', 'batch_status'], 'safe'],
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
        $query = Batches::find();

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
        $query->joinWith('batchCourse');

        // grid filtering conditions
    

        $query->andFilterWhere(['like', 'batch_name', $this->batch_name])
            ->andFilterWhere(['like', 'batch_status', $this->batch_status])
            ->andFilterWhere(['like', 'courses.course_name', $this->batch_course_id]) ;

        return $dataProvider;
    }
}
