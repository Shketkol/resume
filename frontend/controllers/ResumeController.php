<?php

namespace frontend\controllers;

class ResumeController extends \yii\web\Controller
{
    public $layout;
    public function actionIndex()
    {
        $this->layout = 'default';
        return $this->render('index');
    }

    public function actionContact()
    {
        $this->layout = 'default';
        return $this->render('contact');
    }

}
