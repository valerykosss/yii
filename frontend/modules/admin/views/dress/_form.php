<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Dress $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dress-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DressTypeId')->textInput() ?>

    <?= $form->field($model, 'ColorId')->textInput() ?>

    <?= $form->field($model, 'MaterialId')->textInput() ?>

    <?= $form->field($model, 'NecklineId')->textInput() ?>

    <?= $form->field($model, 'SkirtTypeId')->textInput() ?>

    <?= $form->field($model, 'SkirtLengthId')->textInput() ?>

    <?= $form->field($model, 'SleeveTypeId')->textInput() ?>

    <?= $form->field($model, 'SleeveLengthId')->textInput() ?>

    <?= $form->field($model, 'DecorationId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
