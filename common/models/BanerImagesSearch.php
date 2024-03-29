<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BanerImages;

/**
 * BanerImagesSearch represents the model behind the search form about `common\models\BanerImages`.
 */
class BanerImagesSearch extends BanerImages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'CB', 'UB'], 'integer'],
            [['about', 'property', 'agents', 'blog', 'contact_us', 'off_plan', 'site_map', 'terms_and_conditions', 'DOC', 'DOU'], 'safe'],
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
        $query = BanerImages::find();

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

        $query->andFilterWhere(['like', 'about', $this->about])
            ->andFilterWhere(['like', 'property', $this->property])
            ->andFilterWhere(['like', 'agents', $this->agents])
            ->andFilterWhere(['like', 'blog', $this->blog])
            ->andFilterWhere(['like', 'contact_us', $this->contact_us])
            ->andFilterWhere(['like', 'off_plan', $this->off_plan])
            ->andFilterWhere(['like', 'site_map', $this->site_map])
            ->andFilterWhere(['like', 'terms_and_conditions', $this->terms_and_conditions]);

        return $dataProvider;
    }
}
