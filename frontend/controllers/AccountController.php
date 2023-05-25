<?php
    namespace frontend\controllers;
    use frontend\controllers;
    use app\models\User;
    use app\models\Dress;
    use app\models\DressType;
    use app\models\Color;
    use yii\web\Controller; 

    use Yii;
    
    class AccountController extends Controller{


        public function actionIndex()
        {
            $colors = Color::find()->all();
            $dresstypes = DressType::find()->all(); 

            return $this->render('index', [
                'user' => Yii::$app->user->identity,
                'userDresses'=>Yii::$app->user->identity->userDresses,
                'colors'=>$colors,
                'dresstypes'=>$dresstypes,
            ]);
            // return $this->render('index');
        }

        // public function actionIndex()
        // {
        //     $color_id = '';
        //     $dresstype_id = '';
        //     $colors = Color::find()->all();
        //     $dresstypes = DressType::find()->all(); 
        //     $dresses = Dress::find()->all();

        //     if(Yii::$app->request->isAjax) {
        //         $data = Yii::$app->request->post();
    
        //         $color_id = $data['color_id'];
        //         $dresstype_id = $data['dresstype_id'];
    
        //         Yii::$app->response->format = \yii\web\Response::FORMAT_HTML;

        //         // $dresses = Dress::find()
        //         // ->select('*')
        //         // ->innerJoin('dressType', 'dress.dressTypeId = dressType.dressTypeId')
        //         // ->innerJoin('color', 'dress.colorId = color.colorId')
        //         // ->innerJoin('material', 'dress.materialId = material.materialId')
        //         // ->filterWhere(["dress.ColorId" => $color_id, "dress.DressTypeId" => $dresstype_id])
        //         // ->all();

        //         $dresses = Dress::find()
        //         ->select('*')
        //         ->join('join', 'dressType', 'dress.dressTypeId = dressType.dressTypeId')
        //         ->join('join', 'color', 'dress.colorId = color.colorId')
        //         ->join('join', 'material', 'dress.materialId = material.materialId')
        //         ->filterWhere(["dress.colorId" => $color_id, "dress.dressTypeId" => $dresstype_id])
        //         ->all();

    
        //         $dresses_categories = '';
        //                 foreach ($dresses as $dress) {
        //                     $dresses_categories .= 
        //                     "<div class='dressCard'>  
        //                         <div class='dresstype' $dress->DressTypeId</div>
        //                     </div>";
        //                 }
        //                 if( $dresses_categories == ''){
        //                     $dresses_categories='Результаты не найдены';
        //                 }
        //         return $dresses_categories;
        //     }


        //     return $this->render('index', [
        //         // 'dresses'=>$dresses,
        //         'user' => Yii::$app->user->identity,
        //         'userDresses'=>Yii::$app->user->identity->userDresses,
        //         'colors'=>$colors,
        //         'dresstypes'=>$dresstypes,
        //     ]);
        //     // return $this->render('index');
        // }
    
    }
 
    
?>