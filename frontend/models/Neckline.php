<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Neckline".
 *
 * @property int $NecklineId
 * @property string $NecklineType
 *
 * @property Dress[] $dresses
 */
class Neckline extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Neckline';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NecklineType'], 'required'],
            [['NecklineType'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'NecklineId' => 'Neckline ID',
            'NecklineType' => 'Neckline Type',
        ];
    }

    /**
     * Gets query for [[Dresses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDresses()
    {
        return $this->hasMany(Dress::class, ['NecklineId' => 'NecklineId']);
    }
}
