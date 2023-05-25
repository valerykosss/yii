<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SkirtType".
 *
 * @property int $SkirtTypeId
 * @property string $SkirtType
 *
 * @property Dress[] $dresses
 */
class SkirtType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SkirtType';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SkirtType'], 'required'],
            [['SkirtType'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'SkirtTypeId' => 'Skirt Type ID',
            'SkirtType' => 'Skirt Type',
        ];
    }

    /**
     * Gets query for [[Dresses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDresses()
    {
        return $this->hasMany(Dress::class, ['SkirtTypeId' => 'SkirtTypeId']);
    }
}
