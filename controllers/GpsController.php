<?php


namespace app\controllers;


use yii\web\Controller;
use app\classes\ContentGenerator;

class GpsController extends Controller
{
    public $layout = 'gps';

    public function actionIndex()
    {
		ContentGenerator::getSelectQuestion();
		
        return $this->render('index');
    }

    
}