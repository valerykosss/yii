<?php

namespace frontend\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Neckline as NecklineModel;

/**
 * Neckline represents the model behind the search form of `app\models\Neckline`.
 */
class Neckline extends NecklineModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NecklineId'], 'integer'],
            [['NecklineType'], 'safe'],
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
        $query = NecklineModel::find();

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
            'NecklineId' => $this->NecklineId,
        ]);

        $query->andFilterWhere(['like', 'NecklineType', $this->NecklineType]);

        return $dataProvider;
    }
}
