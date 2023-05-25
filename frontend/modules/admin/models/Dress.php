<?php

namespace frontend\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dress as DressModel;

/**
 * Dress represents the model behind the search form of `app\models\Dress`.
 */
class Dress extends DressModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DressId', 'DressTypeId', 'ColorId', 'MaterialId', 'NecklineId', 'SkirtTypeId', 'SkirtLengthId', 'SleeveTypeId', 'SleeveLengthId', 'DecorationId'], 'integer'],
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
        $query = DressModel::find();

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
            'DressId' => $this->DressId,
            'DressTypeId' => $this->DressTypeId,
            'ColorId' => $this->ColorId,
            'MaterialId' => $this->MaterialId,
            'NecklineId' => $this->NecklineId,
            'SkirtTypeId' => $this->SkirtTypeId,
            'SkirtLengthId' => $this->SkirtLengthId,
            'SleeveTypeId' => $this->SleeveTypeId,
            'SleeveLengthId' => $this->SleeveLengthId,
            'DecorationId' => $this->DecorationId,
        ]);

        return $dataProvider;
    }
}
