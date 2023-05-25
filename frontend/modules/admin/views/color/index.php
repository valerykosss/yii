<?php

use app\models\Color;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\modules\admin\models\Color $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Colors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="color-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Color', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ColorId',
            'ColorName',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Color $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ColorId' => $model->ColorId]);
                 }
            ],
        ],
    ]); ?>


</div>
