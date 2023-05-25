<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SkirtLength".
 *
 * @property int $SkirtLengthId
 * @property string $SkirtLength
 *
 * @property Dress[] $dresses
 */
class SkirtLength extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SkirtLength';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SkirtLength'], 'required'],
            [['SkirtLength'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'SkirtLengthId' => 'Skirt Length ID',
            'SkirtLength' => 'Skirt Length',
        ];
    }

    /**
     * Gets query for [[Dresses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDresses()
    {
        return $this->hasMany(Dress::class, ['SkirtLengthId' => 'SkirtLengthId']);
    }
}
