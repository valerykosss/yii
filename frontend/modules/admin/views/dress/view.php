<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Dress $model */

$this->title = $model->DressId;
$this->params['breadcrumbs'][] = ['label' => 'Dresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dress-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'DressId' => $model->DressId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'DressId' => $model->DressId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'DressId',
            'DressTypeId',
            'ColorId',
            'MaterialId',
            'NecklineId',
            'SkirtTypeId',
            'SkirtLengthId',
            'SleeveTypeId',
            'SleeveLengthId',
            'DecorationId',
        ],
    ]) ?>

</div>
