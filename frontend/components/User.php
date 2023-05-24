<?php
namespace app\components;

use Yii;

/**
 * Extended yii\web\User
 *
 * This allows us to do "Yii::$app->user->something" by adding getters
 * like "public function getSomething()"
 *
 * So we can use variables and functions directly in Yii::$app->user
 */
class User extends \yii\web\User
{
    public function getUsername()
    {
        return \Yii::$app->user->identity->username;
    }

    public function getEmail()
    {
        return \Yii::$app->user->identity->email;
    }
    // public function getNumber()
    // {
    //     return \Yii::$app->user->identity->number;
    // }
    // public function getLiked()
    // {
    //     return \Yii::$app->user->identity->Liked;
    // }
    // public function getAdmin()
    // {
    //     return \Yii::$app->user->identity->isadmin;
    // }
}
?>