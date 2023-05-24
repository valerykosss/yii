<?php
    namespace frontend\controllers;
    use frontend\controllers;
    use frontend\models\User;
    use yii\web\Controller; 
    
    class UsersController extends Controller{
    
        public function actionIndex(){
            $users = User::find()->all();
            return $this->render('index',['users'=>$users]);
        }
    }
?>