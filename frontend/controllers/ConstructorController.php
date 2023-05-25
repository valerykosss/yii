<?php 
namespace frontend\controllers;
use frontend\controllers;
use app\models\Material;
use app\models\Dresstype;
use app\models\Color;
use yii\web\Controller; 
use app\models\Dress;
use Yii;

 class ConstructorController extends Controller{

    //каждая новая функция это новая страница
    public function actionIndex(){
        $materials = Material::find()->all();
        $dressestypes = Dresstype::find()->all();
        $colors = Color::find()->all();
        
        return $this->render('index',['materials'=>$materials, 'dressestypes' => $dressestypes, 'colors' => $colors]);
    }

    public function actionCreate($id)   
    {   
        $model = new Dress();   

        // new record   
        if($model->load(Yii::$app->request->post()) && $model->save()){   
            return $this->redirect(['index']);   
        }   
                    
        return $this->render('index', ['model' => $model]);   
    }  
}
