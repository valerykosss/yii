<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Sleevetype $model */

$this->title = 'Update Sleevetype: ' . $model->SleeveTypeId;
$this->params['breadcrumbs'][] = ['label' => 'Sleevetypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SleeveTypeId, 'url' => ['view', 'SleeveTypeId' => $model->SleeveTypeId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sleevetype-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
