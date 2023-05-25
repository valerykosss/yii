<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Dresstype $model */

$this->title = 'Create Dresstype';
$this->params['breadcrumbs'][] = ['label' => 'Dresstypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dresstype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
