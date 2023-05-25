<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Material".
 *
 * @property int $MaterialId
 * @property string $MaterialName
 *
 * @property Dress[] $dresses
 */
class Material extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Material';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MaterialName'], 'required'],
            [['MaterialName'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MaterialId' => 'Material ID',
            'MaterialName' => 'Material Name',
        ];
    }

    /**
     * Gets query for [[Dresses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDresses()
    {
        return $this->hasMany(Dress::class, ['MaterialId' => 'MaterialId']);
    }
}
