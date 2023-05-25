<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SleeveType".
 *
 * @property int $SleeveTypeId
 * @property string $SleeveType
 *
 * @property Dress[] $dresses
 */
class SleeveType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SleeveType';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SleeveType'], 'required'],
            [['SleeveType'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'SleeveTypeId' => 'Sleeve Type ID',
            'SleeveType' => 'Sleeve Type',
        ];
    }

    /**
     * Gets query for [[Dresses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDresses()
    {
        return $this->hasMany(Dress::class, ['SleeveTypeId' => 'SleeveTypeId']);
    }
}
