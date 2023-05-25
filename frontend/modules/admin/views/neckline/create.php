<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Neckline $model */

$this->title = 'Create Neckline';
$this->params['breadcrumbs'][] = ['label' => 'Necklines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="neckline-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
