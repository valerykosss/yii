<?php 
use yii\helpers\Html;
$this -> title=Yii::t('app','ADMINISTRATION PANEL');
$this -> params['breadcrumbs'][]=$this->title;
?>
<div class="admin-default-index">
    <h1><?= Html::encode($this->title)?></h1>
    <?php
     if (Yii::$app->user->identity->role=='admin') {
        
        ?>
        <p>
        <?= Html::a(Yii::t('app', 'Dress Type'), ['dresstype/index'], ['class' =>
        'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Skirt Type'), ['skirttype/index'],
        ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Skirt Length'), ['skirtlength/index'],
        ['class' => 'btn btn-primary']) ?>
          <?= Html::a(Yii::t('app', 'Neckline'), ['neckline/index'],
        ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Color'), ['color/index'],
        ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Decoration'), ['decoration/index'],
        ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Material'), ['material/index'],
        ['class' => 'btn btn-primary']) ?>
         <?= Html::a(Yii::t('app', 'Neckline'), ['neckline/index'],
        ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Sleeve length'), ['sleevelength/index'],
        ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Sleeve type'), ['sleevetype/index'],
        ['class' => 'btn btn-primary']) ?>
           <?= Html::a(Yii::t('app', 'Users'), ['user/index'],
        ['class' => 'btn btn-primary']) ?>
        </p>
        <?php 
 }else{
     echo "<p>Доступ запрещен</p>";
 }?>
 </div>