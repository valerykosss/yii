<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Decoration $model */

$this->title = 'Create Decoration';
$this->params['breadcrumbs'][] = ['label' => 'Decorations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="decoration-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
