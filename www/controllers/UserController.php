<?php

namespace app\controllers;

use Yii;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\helpers\Url;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends BaseController
{
   /* public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator'] = [
            'class' => ContentNegotiator::className(),
            'formats' => [
                'application/json' => Response::FORMAT_JSON
            ]

        ];

        return $behaviors;
    }*/

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->user_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->user_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * @return string|\yii\web\Response
     */
    public function actionSignUp()
    {
        $model = new User();
        $model->scenario = User::SCENARIO_REGISTER;
        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
        }

        if(Yii::$app->request->post()){
            $request_data = Yii::$app->request->post();
            $model->login = $request_data['login'];
            $model->password = $request_data['password'];
            $model->confirmPassword = $request_data['confirmPassword'];
            $model->email = $request_data['email'];
            if($model->validate()){
                $model->save();
                $activated_hash = $this->sendEmail($model);
                $model->activated_hash = $activated_hash;
                $model->save();
                //$this->redirect($url = Url::to(['confirm-email/'.$activated_hash]));
                return ['activated_hash' => $activated_hash];
                //return $activated_hash;
            } else{
                Yii::$app->response->setStatusCode(400);
                return $model->getErrors();
            }

        }else {
            return $this->render('signUp', [
                'model' => $model,
            ]);
        }
    }

    /**
     * @return string|\yii\web\Response
     */
    public function actionSignIn()
    {
        $model = new User();
        $model->scenario = User::SCENARIO_LOGIN;
        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
        }

        if(Yii::$app->request->post()){
            $request_data = Yii::$app->request->post();
            $model->email = $request_data['email'];
            $model->password = $request_data['password'];
            $model->rememberMe = $request_data['rememberMe'];
            // TODO
            if($model->validate()){

                return "";
            } else{
                Yii::$app->response->setStatusCode(400);
                return $model->getErrors();
            }

        }else {
            return $this->render('signIn', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Checks whether email or login is unique
     */
    public function actionCheckUnique()
    {
        $post = Yii::$app->request->post();
        switch ($post['field']){
            case 'email':
                $isUnique = User::findByEmail($post['value']) === null;
                break;
            case 'login':
                $isUnique = User::findByLogin($post['value']) === null;
                break;
            default:
                break;
        }

        Yii::$app->response->format = 'json';
        return ["result" => $isUnique];
    }

    private function sendEmail($model){
/*        Yii::$app->mail->compose()
            ->setFrom('babydiary@alkov.16mb.com')
            ->setTo('kovalchuk.aleksey.s@yandex.ru')
            ->setSubject('Email sent from Yii2-Swiftmailer')
            ->send();*/
        $userId = $model->user_id;
        $email = $model->email;
        $md5hash = md5($userId . $email);
        return $md5hash;
    }
}
