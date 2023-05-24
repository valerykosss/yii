<?php 
namespace frontend\controllers;
use frontend\controllers;
use frontend\models\Material;
use frontend\models\Dresstype;
use frontend\models\Color;
use yii\web\Controller; 

 class CreatedressController extends Controller{

    //каждая новая функция это новая страница
    public function actionIndex(){
        $materials = Material::find()->all();
        $dressestypes = Dresstype::find()->all();
        $colors = Color::find()->all();
        
        return $this->render('index',['materials'=>$materials, 'dressestypes' => $dressestypes, 'colors' => $colors]);
    }
 }
