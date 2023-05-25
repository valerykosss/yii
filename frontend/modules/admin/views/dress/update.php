<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Dress $model */

$this->title = 'Update Dress: ' . $model->DressId;
$this->params['breadcrumbs'][] = ['label' => 'Dresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DressId, 'url' => ['view', 'DressId' => $model->DressId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dress-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
