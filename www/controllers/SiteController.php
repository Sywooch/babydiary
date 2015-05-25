<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Login;

class SiteController extends Controller
{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionWidgetLogin()
    {
        $this->layout = 'modules';
        return $this->render('widgetLogin');
    }

    public function actionProductPanels()
    {
        $this->layout = 'modules';
        return $this->render('productPanels');
    }

    public function actionGetProducts()
    {
        $this->layout = 'blank';
        $products = '[{"name":"Test","price":2,"description":"Vestibulum placerat ipsum non ligula accumsan venenatis. Aenean nec magna semper, commodo leo ac, ultrices magna. Vivamus sed tempus purus, vitae malesuada nibh. Sed sed justo commodo, mollis eros quis, varius nulla. Sed eget convallis metus. Cras posuere volutpat nisl non volutpat. Sed interdum elit est, tincidunt malesuada sem pulvinar id.","canPurchase":true,"soldOut":false,"images":[{"thumb":"http://wwww.lenagold.ru/fon/clipart/d/drag/drago36.jpg","full":"http://wwww.lenagold.ru/fon/clipart/d/drag/drago36.jpg"},{"thumb":"http://shoppingzone.ru/img/minst9.jpg","full":"http://shoppingzone.ru/img/minst9.jpg"}],"reviews":[{"stars":5,"body":"I love this product!","author":"joe@thomas.com"},{"stars":1,"body":"This product sucks","author":"tim@hater.com"}]},{"name":"Test2","price":5.95,"description":"Vestibulum placerat ipsum non ligula accumsan venenatis. Aenean nec magna semper, commodo leo ac, ultrices magna. Vivamus sed tempus purus, vitae malesuada nibh. Sed sed justo commodo, mollis eros quis, varius nulla. Sed eget convallis metus. Cras posuere volutpat nisl non volutpat. Sed interdum elit est, tincidunt malesuada sem pulvinar id.","canPurchase":false,"soldOut":false,"images":[{"thumb":"http://pro-kamni.ru/wp-content/uploads/2011/03/Topaz.jpg","full":"http://pro-kamni.ru/wp-content/uploads/2011/03/Topaz.jpg"},{"thumb":"http://wwww.lenagold.ru/fon/clipart/d/drag/drago36.jpg","full":"http://wwww.lenagold.ru/fon/clipart/d/drag/drago36.jpg"}]}]';
        return $this->render('products', ['data' => $products]);
    }

    public function actionLogin()
    {
        $model = new Login();
        $params = json_decode(trim(file_get_contents('php://input')), true);
        $model->email = $params['email'];
        $model->password = $params['password'];
        $model->rememberMe = isset($params['remember']) ? $params['remember'] : false;
        if ($model->login()) {
            return '{success : true}';
        } else {
            return $this->render('widgetLogin', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionDiary(){
        $this->layout = 'blank';
        return $this->render('diary');
    }
}

