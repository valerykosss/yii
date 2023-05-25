<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SleeveLength".
 *
 * @property int $SleeveLengthId
 * @property string $SleeveLength
 *
 * @property Dress[] $dresses
 */
class SleeveLength extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SleeveLength';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SleeveLength'], 'required'],
            [['SleeveLength'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'SleeveLengthId' => 'Sleeve Length ID',
            'SleeveLength' => 'Sleeve Length',
        ];
    }

    /**
     * Gets query for [[Dresses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDresses()
    {
        return $this->hasMany(Dress::class, ['SleeveLengthId' => 'SleeveLengthId']);
    }
}
