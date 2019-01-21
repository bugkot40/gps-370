<?php


namespace app\controllers;


use yii\web\Controller;

class GpsController extends Controller
{
    public $layout = 'gps';

    public function actionIndex()
    {
        return $this->render('index');
    }

    
}