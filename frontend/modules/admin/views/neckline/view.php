<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Neckline $model */

$this->title = $model->NecklineId;
$this->params['breadcrumbs'][] = ['label' => 'Necklines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="neckline-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'NecklineId' => $model->NecklineId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'NecklineId' => $model->NecklineId], [
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
            'NecklineId',
            'NecklineType',
        ],
    ]) ?>

</div>
