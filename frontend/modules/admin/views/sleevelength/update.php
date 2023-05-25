<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Sleevelength $model */

$this->title = 'Update Sleevelength: ' . $model->SleeveLengthId;
$this->params['breadcrumbs'][] = ['label' => 'Sleevelengths', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SleeveLengthId, 'url' => ['view', 'SleeveLengthId' => $model->SleeveLengthId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sleevelength-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
