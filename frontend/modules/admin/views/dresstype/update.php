<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Dresstype $model */

$this->title = 'Update Dresstype: ' . $model->DressTypeId;
$this->params['breadcrumbs'][] = ['label' => 'Dresstypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DressTypeId, 'url' => ['view', 'DressTypeId' => $model->DressTypeId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dresstype-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
