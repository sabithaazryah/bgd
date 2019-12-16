<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\HomeContents;

/**
 * HomeContentsSearch represents the model behind the search form about `common\models\HomeContents`.
 */
class HomeContentsSearch extends HomeContents
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'CB', 'UB'], 'integer'],
            [['phone', 'email', 'section1_title1', 'section1_title2', 'section1_description1', 'section1_description2', 'section1_service', 'product_section_title', 'product_list', 'facebook_link', 'linkedin_link', 'pinterest_link', 'twitter_link', 'instegram_link', 'youtube_link', 'DOC', 'DOU'], 'safe'],
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
        $query = HomeContents::find();

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

        $query->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'section1_title1', $this->section1_title1])
            ->andFilterWhere(['like', 'section1_title2', $this->section1_title2])
            ->andFilterWhere(['like', 'section1_description1', $this->section1_description1])
            ->andFilterWhere(['like', 'section1_description2', $this->section1_description2])
            ->andFilterWhere(['like', 'section1_service', $this->section1_service])
            ->andFilterWhere(['like', 'product_section_title', $this->product_section_title])
            ->andFilterWhere(['like', 'product_list', $this->product_list])
            ->andFilterWhere(['like', 'facebook_link', $this->facebook_link])
            ->andFilterWhere(['like', 'linkedin_link', $this->linkedin_link])
            ->andFilterWhere(['like', 'pinterest_link', $this->pinterest_link])
            ->andFilterWhere(['like', 'twitter_link', $this->twitter_link])
            ->andFilterWhere(['like', 'instegram_link', $this->instegram_link])
            ->andFilterWhere(['like', 'youtube_link', $this->youtube_link]);

        return $dataProvider;
    }
}
