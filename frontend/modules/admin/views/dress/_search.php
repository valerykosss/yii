<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\modules\admin\models\Dress $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dress-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'DressId') ?>

    <?= $form->field($model, 'DressTypeId') ?>

    <?= $form->field($model, 'ColorId') ?>

    <?= $form->field($model, 'MaterialId') ?>

    <?= $form->field($model, 'NecklineId') ?>

    <?php // echo $form->field($model, 'SkirtTypeId') ?>

    <?php // echo $form->field($model, 'SkirtLengthId') ?>

    <?php // echo $form->field($model, 'SleeveTypeId') ?>

    <?php // echo $form->field($model, 'SleeveLengthId') ?>

    <?php // echo $form->field($model, 'DecorationId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
