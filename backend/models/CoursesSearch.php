<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Courses;

/**
 * CoursesSearch represents the model behind the search form of `backend\models\Courses`.
 */
class CoursesSearch extends Courses
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_id'], 'integer'],
            [['course_name', 'course_starting_date', 'course_ending_date', 'course_duration', 'course_status'], 'safe'],
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
        $query = Courses::find();

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
            'course_id' => $this->course_id,
            'course_starting_date' => $this->course_starting_date,
            'course_ending_date' => $this->course_ending_date,
        ]);

        $query->andFilterWhere(['like', 'course_name', $this->course_name])
            ->andFilterWhere(['like', 'course_duration', $this->course_duration])
            ->andFilterWhere(['like', 'course_status', $this->course_status]);

        return $dataProvider;
    }
}
