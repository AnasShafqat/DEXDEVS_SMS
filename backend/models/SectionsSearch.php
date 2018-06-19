<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Sections;

/**
 * SectionsSearch represents the model behind the search form of `backend\models\Sections`.
 */
class SectionsSearch extends Sections
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['section_id'], 'integer'],
            [['section_name', 'section_course_id', 'section_batch_id', 'section_status'], 'safe'],
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
        $query = Sections::find();

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
        $query->joinWith('sectionCourse');
        $query->joinWith('sectionBatch');


        // grid filtering conditions
        $query->andFilterWhere([
            'section_id' => $this->section_id,
        ]);

        $query->andFilterWhere(['like', 'section_name', $this->section_name])
            ->andFilterWhere(['like', 'section_status', $this->section_status])
            ->andFilterWhere(['like', 'courses.course_name', $this->section_course_id])
            ->andFilterWhere(['like', 'batches.batch_name', $this->section_batch_id]);

        return $dataProvider;
    }
}
