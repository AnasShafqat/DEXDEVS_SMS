<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Students;

/**
 * StudentsSearch represents the model behind the search form of `backend\models\Students`.
 */
class StudentsSearch extends Students
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['std_id', 'std_course_id', 'std_batch_id', 'std_section_id'], 'integer'],
            [['std_name', 'std_gaurdian_name', 'std_email', 'std_cnic', 'std_phone', 'std_gaurdian_phone', 'std_address', 'std_gender', 'std_qualification', 'std_status'], 'safe'],
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
        $query = Students::find();

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
            'std_id' => $this->std_id,
            'std_course_id' => $this->std_course_id,
            'std_batch_id' => $this->std_batch_id,
            'std_section_id' => $this->std_section_id,
        ]);

        $query->andFilterWhere(['like', 'std_name', $this->std_name])
            ->andFilterWhere(['like', 'std_gaurdian_name', $this->std_gaurdian_name])
            ->andFilterWhere(['like', 'std_email', $this->std_email])
            ->andFilterWhere(['like', 'std_cnic', $this->std_cnic])
            ->andFilterWhere(['like', 'std_phone', $this->std_phone])
            ->andFilterWhere(['like', 'std_gaurdian_phone', $this->std_gaurdian_phone])
            ->andFilterWhere(['like', 'std_address', $this->std_address])
            ->andFilterWhere(['like', 'std_gender', $this->std_gender])
            ->andFilterWhere(['like', 'std_qualification', $this->std_qualification])
            ->andFilterWhere(['like', 'std_status', $this->std_status]);

        return $dataProvider;
    }
}
