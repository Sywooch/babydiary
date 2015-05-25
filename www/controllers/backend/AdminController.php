<?php
/**
 * Created by PhpStorm.
 * User: akovalchuk
 * Date: 16.04.2015
 * Time: 11:49
 */

namespace app\controllers\backend;
use yii\web\Controller;


class AdminController extends Controller {

    public $layout = 'admin';

    public function actionIndex(){
        return $this->render('index');
    }

    public  function actionDictionaries($dictionary = ''){
        return $this->render('dictionaries');
    }
} 