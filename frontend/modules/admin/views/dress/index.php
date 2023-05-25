<?php

use app\models\Dress;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\modules\admin\models\Dress $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Dresses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dress-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dress', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'DressId',
            'DressTypeId',
            'ColorId',
            'MaterialId',
            'NecklineId',
            //'SkirtTypeId',
            //'SkirtLengthId',
            //'SleeveTypeId',
            //'SleeveLengthId',
            //'DecorationId',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Dress $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'DressId' => $model->DressId]);
                 }
            ],
        ],
    ]); ?>


</div>
