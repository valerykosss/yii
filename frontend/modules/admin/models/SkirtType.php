<?php

namespace frontend\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Skirttype as SkirttypeModel;

/**
 * Skirttype represents the model behind the search form of `app\models\Skirttype`.
 */
class Skirttype extends SkirttypeModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SkirtTypeId'], 'integer'],
            [['SkirtType'], 'safe'],
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
        $query = SkirttypeModel::find();

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
            'SkirtTypeId' => $this->SkirtTypeId,
        ]);

        $query->andFilterWhere(['like', 'SkirtType', $this->SkirtType]);

        return $dataProvider;
    }
}
