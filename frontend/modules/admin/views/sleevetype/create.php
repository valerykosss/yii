<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Sleevetype $model */

$this->title = 'Create Sleevetype';
$this->params['breadcrumbs'][] = ['label' => 'Sleevetypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sleevetype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
