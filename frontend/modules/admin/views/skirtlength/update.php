<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\SkirtLength $model */

$this->title = 'Update Skirt Length: ' . $model->SkirtLengthId;
$this->params['breadcrumbs'][] = ['label' => 'Skirt Lengths', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SkirtLengthId, 'url' => ['view', 'SkirtLengthId' => $model->SkirtLengthId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skirt-length-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
