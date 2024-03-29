<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Material $model */

$this->title = 'Update Material: ' . $model->MaterialId;
$this->params['breadcrumbs'][] = ['label' => 'Materials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MaterialId, 'url' => ['view', 'MaterialId' => $model->MaterialId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="material-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
