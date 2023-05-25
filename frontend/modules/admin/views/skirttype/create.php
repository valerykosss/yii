<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Skirttype $model */

$this->title = 'Create Skirttype';
$this->params['breadcrumbs'][] = ['label' => 'Skirttypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skirttype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
