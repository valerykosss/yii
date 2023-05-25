<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Dresstype $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dresstype-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DressTypeName')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
