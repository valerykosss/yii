<?php

use app\models\Neckline;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\modules\admin\models\Neckline $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Necklines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="neckline-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Neckline', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'NecklineId',
            'NecklineType',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Neckline $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'NecklineId' => $model->NecklineId]);
                 }
            ],
        ],
    ]); ?>


</div>
