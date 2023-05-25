<?php

use app\models\Dresstype;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\modules\admin\models\Dresstype $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Dresstypes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dresstype-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dresstype', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'DressTypeId',
            'DressTypeName',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Dresstype $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'DressTypeId' => $model->DressTypeId]);
                 }
            ],
        ],
    ]); ?>


</div>
