<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Dress".
 *
 * @property int $DressId
 * @property int $DressTypeId
 * @property int $ColorId
 * @property int $MaterialId
 * @property int $NecklineId
 * @property int $SkirtTypeId
 * @property int $SkirtLengthId
 * @property int $SleeveTypeId
 * @property int $SleeveLengthId
 * @property int $DecorationId
 *
 * @property Color $color
 * @property Decoration $decoration
 * @property DressType $dressType
 * @property Material $material
 * @property Neckline $neckline
 * @property SkirtLength $skirtLength
 * @property SkirtType $skirtType
 * @property SleeveLength $sleeveLength
 * @property SleeveType $sleeveType
 */
class Dress extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Dress';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DressTypeId', 'ColorId', 'MaterialId', 'NecklineId', 'SkirtTypeId', 'SkirtLengthId', 'SleeveTypeId', 'SleeveLengthId', 'DecorationId'], 'required'],
            [['DressTypeId', 'ColorId', 'MaterialId', 'NecklineId', 'SkirtTypeId', 'SkirtLengthId', 'SleeveTypeId', 'SleeveLengthId', 'DecorationId'], 'integer'],
            [['ColorId'], 'exist', 'skipOnError' => true, 'targetClass' => Color::class, 'targetAttribute' => ['ColorId' => 'ColorId']],
            [['DecorationId'], 'exist', 'skipOnError' => true, 'targetClass' => Decoration::class, 'targetAttribute' => ['DecorationId' => 'DecorationId']],
            [['DressTypeId'], 'exist', 'skipOnError' => true, 'targetClass' => DressType::class, 'targetAttribute' => ['DressTypeId' => 'DressTypeId']],
            [['MaterialId'], 'exist', 'skipOnError' => true, 'targetClass' => Material::class, 'targetAttribute' => ['MaterialId' => 'MaterialId']],
            [['NecklineId'], 'exist', 'skipOnError' => true, 'targetClass' => Neckline::class, 'targetAttribute' => ['NecklineId' => 'NecklineId']],
            [['SkirtLengthId'], 'exist', 'skipOnError' => true, 'targetClass' => SkirtLength::class, 'targetAttribute' => ['SkirtLengthId' => 'SkirtLengthId']],
            [['SkirtTypeId'], 'exist', 'skipOnError' => true, 'targetClass' => SkirtType::class, 'targetAttribute' => ['SkirtTypeId' => 'SkirtTypeId']],
            [['SleeveLengthId'], 'exist', 'skipOnError' => true, 'targetClass' => SleeveLength::class, 'targetAttribute' => ['SleeveLengthId' => 'SleeveLengthId']],
            [['SleeveTypeId'], 'exist', 'skipOnError' => true, 'targetClass' => SleeveType::class, 'targetAttribute' => ['SleeveTypeId' => 'SleeveTypeId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'DressId' => 'Dress ID',
            'DressTypeId' => 'Dress Type ID',
            'ColorId' => 'Color ID',
            'MaterialId' => 'Material ID',
            'NecklineId' => 'Neckline ID',
            'SkirtTypeId' => 'Skirt Type ID',
            'SkirtLengthId' => 'Skirt Length ID',
            'SleeveTypeId' => 'Sleeve Type ID',
            'SleeveLengthId' => 'Sleeve Length ID',
            'DecorationId' => 'Decoration ID',
        ];
    }

    /**
     * Gets query for [[Color]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getColor()
    {
        return $this->hasOne(Color::class, ['ColorId' => 'ColorId']);
    }

    /**
     * Gets query for [[Decoration]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDecoration()
    {
        return $this->hasOne(Decoration::class, ['DecorationId' => 'DecorationId']);
    }

    /**
     * Gets query for [[DressType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDressType()
    {
        return $this->hasOne(DressType::class, ['DressTypeId' => 'DressTypeId']);
    }

    /**
     * Gets query for [[Material]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaterial()
    {
        return $this->hasOne(Material::class, ['MaterialId' => 'MaterialId']);
    }

    /**
     * Gets query for [[Neckline]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNeckline()
    {
        return $this->hasOne(Neckline::class, ['NecklineId' => 'NecklineId']);
    }

    /**
     * Gets query for [[SkirtLength]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkirtLength()
    {
        return $this->hasOne(SkirtLength::class, ['SkirtLengthId' => 'SkirtLengthId']);
    }

    /**
     * Gets query for [[SkirtType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkirtType()
    {
        return $this->hasOne(SkirtType::class, ['SkirtTypeId' => 'SkirtTypeId']);
    }

    /**
     * Gets query for [[SleeveLength]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSleeveLength()
    {
        return $this->hasOne(SleeveLength::class, ['SleeveLengthId' => 'SleeveLengthId']);
    }

    /**
     * Gets query for [[SleeveType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSleeveType()
    {
        return $this->hasOne(SleeveType::class, ['SleeveTypeId' => 'SleeveTypeId']);
    }

    public function getUser()
    {
        return $this->hasOne(User::class, ['DressId' => 'UserId']);
    }
}
