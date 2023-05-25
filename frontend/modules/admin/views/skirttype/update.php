<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Skirttype $model */

$this->title = 'Update Skirttype: ' . $model->SkirtTypeId;
$this->params['breadcrumbs'][] = ['label' => 'Skirttypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SkirtTypeId, 'url' => ['view', 'SkirtTypeId' => $model->SkirtTypeId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skirttype-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
