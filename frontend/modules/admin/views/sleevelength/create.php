<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Sleevelength $model */

$this->title = 'Create Sleevelength';
$this->params['breadcrumbs'][] = ['label' => 'Sleevelengths', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sleevelength-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
