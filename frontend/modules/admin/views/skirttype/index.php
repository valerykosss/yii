<?php

use app\models\Skirttype;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\modules\admin\models\Skirttype $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Skirttypes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skirttype-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Skirttype', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SkirtTypeId',
            'SkirtType',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Skirttype $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'SkirtTypeId' => $model->SkirtTypeId]);
                 }
            ],
        ],
    ]); ?>


</div>
