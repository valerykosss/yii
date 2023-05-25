<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Neckline $model */

$this->title = 'Update Neckline: ' . $model->NecklineId;
$this->params['breadcrumbs'][] = ['label' => 'Necklines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NecklineId, 'url' => ['view', 'NecklineId' => $model->NecklineId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="neckline-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
