<?php

use app\models\Sleevelength;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\modules\admin\models\Sleevelength $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sleevelengths';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sleevelength-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sleevelength', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SleeveLengthId',
            'SleeveLength',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Sleevelength $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'SleeveLengthId' => $model->SleeveLengthId]);
                 }
            ],
        ],
    ]); ?>


</div>
