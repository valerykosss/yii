<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Decoration".
 *
 * @property int $DecorationId
 * @property string $DecorationName
 *
 * @property Dress[] $dresses
 */
class Decoration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Decoration';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DecorationName'], 'required'],
            [['DecorationName'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'DecorationId' => 'Decoration ID',
            'DecorationName' => 'Decoration Name',
        ];
    }

    /**
     * Gets query for [[Dresses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDresses()
    {
        return $this->hasMany(Dress::class, ['DecorationId' => 'DecorationId']);
    }
}
