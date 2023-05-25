<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "DressType".
 *
 * @property int $DressTypeId
 * @property string $DressTypeName
 *
 * @property Dress[] $dresses
 * @property Question1[] $question1s
 */
class DressType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'DressType';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DressTypeName'], 'required'],
            [['DressTypeName'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'DressTypeId' => 'Dress Type ID',
            'DressTypeName' => 'Dress Type Name',
        ];
    }

    /**
     * Gets query for [[Dresses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDresses()
    {
        return $this->hasMany(Dress::class, ['DressTypeId' => 'DressTypeId']);
    }

    /**
     * Gets query for [[Question1s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getQuestion1s()
    {
        return $this->hasMany(Question1::class, ['isDressType' => 'DressTypeId']);
    }
}
