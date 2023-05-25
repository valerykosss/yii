<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Sleevelength $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sleevelength-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SleeveLength')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
