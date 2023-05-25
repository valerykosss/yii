<?php

use app\models\SkirtLength;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\modules\admin\models\SkirtLength $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Skirt Lengths';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skirt-length-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Skirt Length', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SkirtLengthId',
            'SkirtLength',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SkirtLength $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'SkirtLengthId' => $model->SkirtLengthId]);
                 }
            ],
        ],
    ]); ?>


</div>
