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
            [['id', 'section3_value1', 'section3_value2', 'section3_value3', 'section3_value4', 'status', 'CB', 'UB'], 'integer'],
            [['section1_title1', 'section1_title2', 'section1_description2', 'section1_image', 'section2_description', 'section3_label1', 'section3_label2', 'section3_label3', 'section3_label4', 'section4_image', 'section4_description', 'DOC', 'DOU'], 'safe'],
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
            'section3_value1' => $this->section3_value1,
            'section3_value2' => $this->section3_value2,
            'section3_value3' => $this->section3_value3,
            'section3_value4' => $this->section3_value4,
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'section1_title1', $this->section1_title1])
            ->andFilterWhere(['like', 'section1_title2', $this->section1_title2])
            ->andFilterWhere(['like', 'section1_description2', $this->section1_description2])
            ->andFilterWhere(['like', 'section1_image', $this->section1_image])
            ->andFilterWhere(['like', 'section2_description', $this->section2_description])
            ->andFilterWhere(['like', 'section3_label1', $this->section3_label1])
            ->andFilterWhere(['like', 'section3_label2', $this->section3_label2])
            ->andFilterWhere(['like', 'section3_label3', $this->section3_label3])
            ->andFilterWhere(['like', 'section3_label4', $this->section3_label4])
            ->andFilterWhere(['like', 'section4_image', $this->section4_image])
            ->andFilterWhere(['like', 'section4_description', $this->section4_description]);

        return $dataProvider;
    }
}
