<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Decoration $model */

$this->title = $model->DecorationId;
$this->params['breadcrumbs'][] = ['label' => 'Decorations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="decoration-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'DecorationId' => $model->DecorationId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'DecorationId' => $model->DecorationId], [
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
            'DecorationId',
            'DecorationName',
        ],
    ]) ?>

</div>
