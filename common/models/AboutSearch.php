<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\About;

/**
 * AboutSearch represents the model behind the search form about `common\models\About`.
 */
class AboutSearch extends About
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'CB', 'UB'], 'integer'],
            [['section1_title1', 'section1_title2', 'section1_description1', 'section1_description2', 'section2_title', 'mission', 'vision', 'who_we_are', 'what_we_do', 'our_approach', 'DOC', 'DOU'], 'safe'],
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
        $query = About::find();

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
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'section1_title1', $this->section1_title1])
            ->andFilterWhere(['like', 'section1_title2', $this->section1_title2])
            ->andFilterWhere(['like', 'section1_description1', $this->section1_description1])
            ->andFilterWhere(['like', 'section1_description2', $this->section1_description2])
            ->andFilterWhere(['like', 'section2_title', $this->section2_title])
            ->andFilterWhere(['like', 'mission', $this->mission])
            ->andFilterWhere(['like', 'vision', $this->vision])
            ->andFilterWhere(['like', 'who_we_are', $this->who_we_are])
            ->andFilterWhere(['like', 'what_we_do', $this->what_we_do])
            ->andFilterWhere(['like', 'our_approach', $this->our_approach]);

        return $dataProvider;
    }
}
