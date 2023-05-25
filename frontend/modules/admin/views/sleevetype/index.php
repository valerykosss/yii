<?php

use app\models\Sleevetype;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\modules\admin\models\Sleevetype $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sleevetypes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sleevetype-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sleevetype', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SleeveTypeId',
            'SleeveType',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Sleevetype $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'SleeveTypeId' => $model->SleeveTypeId]);
                 }
            ],
        ],
    ]); ?>


</div>
