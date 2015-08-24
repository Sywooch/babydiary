<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Login;
use yii\web\Response;
use yii\helpers\BaseFileHelper;

class SiteController extends Controller
{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        // the current user identity. Null if the user is not authenticated.
        $identity = Yii::$app->user->identity;
var_dump($identity);
// the ID of the current user. Null if the user not authenticated.
        $id = Yii::$app->user->id;
var_dump($id);
// whether the current user is a guest (not authenticated)
        $isGuest = Yii::$app->user->isGuest;
        var_dump($isGuest);
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

    public function actionTest(){
/*        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
        Yii::$app->response->format = Response::FORMAT_JSON;
        //Yii::$app->response->setStatusCode(302);

        return ["message" => "Услуга не может быть подключена без добавления номера. Беспл. справка 678.",
            "isAvailable" => true,
            "isActivated" => false,
            "responseCode" => "OK",
            "numbers" => null,
            "servicePrices" => [],
            "maxEntries" => 30];
*/
        //static::$app->language
        /*return $files = yii\helpers\FileHelper::findFiles('@app/messages/" . Yii::$app->sourceLanguage', [
            'only' => ['filename.ext'],
            'recursive' => true,
        ]);*/

    }

    public function actionGetValidationMessages(){
        $localizationFile = include_once("../messages/ru/validation.php");
        return json_encode($localizationFile);
    }

    public function actionErrorPage(){

    }
}

