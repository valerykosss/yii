<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Decoration $model */

$this->title = 'Update Decoration: ' . $model->DecorationId;
$this->params['breadcrumbs'][] = ['label' => 'Decorations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DecorationId, 'url' => ['view', 'DecorationId' => $model->DecorationId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="decoration-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
