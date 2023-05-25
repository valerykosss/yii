<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Color".
 *
 * @property int $ColorId
 * @property string $ColorName
 *
 * @property Dress[] $dresses
 */
class Color extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Color';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ColorName'], 'required'],
            [['ColorName'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ColorId' => 'Color ID',
            'ColorName' => 'Color Name',
        ];
    }

    /**
     * Gets query for [[Dresses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDresses()
    {
        return $this->hasMany(Dress::class, ['ColorId' => 'ColorId']);
    }
}
