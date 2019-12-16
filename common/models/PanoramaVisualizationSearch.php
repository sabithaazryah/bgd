<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PanoramaVisualization;

/**
 * PanoramaVisualizationSearch represents the model behind the search form about `common\models\PanoramaVisualization`.
 */
class PanoramaVisualizationSearch extends PanoramaVisualization
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'CB', 'UB'], 'integer'],
            [['title', 'canonical_name', 'description', 'image', 'location', 'scope', 'facebook_link', 'twitter_link', 'linkedin_link', 'instegram_link', 'DOC', 'DOU'], 'safe'],
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
        $query = PanoramaVisualization::find();

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

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'canonical_name', $this->canonical_name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'scope', $this->scope])
            ->andFilterWhere(['like', 'facebook_link', $this->facebook_link])
            ->andFilterWhere(['like', 'twitter_link', $this->twitter_link])
            ->andFilterWhere(['like', 'linkedin_link', $this->linkedin_link])
            ->andFilterWhere(['like', 'instegram_link', $this->instegram_link]);

        return $dataProvider;
    }
}
