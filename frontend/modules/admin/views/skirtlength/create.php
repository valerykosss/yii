<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\SkirtLength $model */

$this->title = 'Create Skirt Length';
$this->params['breadcrumbs'][] = ['label' => 'Skirt Lengths', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skirt-length-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
