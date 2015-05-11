<?php

namespace app\controllers;

use app\models\DctDoctorLoc;
use app\models\DctLanguage;
use Yii;
use app\models\DctDoctor;
use app\models\DctDoctorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DctDoctorController implements the CRUD actions for DctDoctor model.
 */
class DctDoctorController extends Controller
{
    public $layout = 'admin';

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all DctDoctor models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DctDoctorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DctDoctor model.
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
     * Creates a new DctDoctor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DctDoctor();
        $languages = DctLanguage::find()->select(['dct_language_id as id', 'name', 'locale'])->asArray()->all();
        foreach($languages as $lang){
                    $langList[$lang['id']] =$lang['name'];
        }
        $modelLoc = new DctDoctorLoc();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if ($model->dct_doctor_id > -1){
                $params = Yii::$app->request->post();
                for($i = 0; $i < count($languages); $i++){
                    $childModel = new DctDoctorLoc();
                    $childModel->dct_doctor_id = $model->dct_doctor_id;
                    $childModel->dct_language_id = $params[$i]['dct_language_id'];
                    $childModel->text = $params[$i]['text'];
                    $childModel->save();
                }
            }
            return $this->redirect(['view', 'id' => $model->dct_doctor_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'languages' => $languages,
                'modelLoc' => $modelLoc
            ]);
        }
    }

    /**
     * Updates an existing DctDoctor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $languages = DctLanguage::find()->select(['dct_language_id as id', 'name', 'locale'])->asArray()->all();
        foreach($languages as $lang){
            $langList[$lang['id']] =$lang['name'];
        }
        $doctorLoc = DctDoctorLoc::find()->with('dctLanguage')->where(['dct_doctor_id' => $id])->asArray()->all();
        $modelLoc = [];
        foreach($doctorLoc as $doctor){
            $modelLoc[$doctor['dct_language_id']] = ['text' => $doctor['text'], 'id' => $doctor['dct_doctor_loc_id']];
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if ($model->dct_doctor_id > -1){
                $params = Yii::$app->request->post();
                for($i = 0; $i < count($languages); $i++){
                    $childModel = DctDoctorLoc::findOne($params[$i]['dct_doctor_loc_id']);
                    $childModel->text = $params[$i]['text'];
                    $childModel->save();
                }
            }
            return $this->redirect(['view', 'id' => $model->dct_doctor_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'languages' => $languages,
                'modelLoc' => $modelLoc
            ]);
        }
    }

    /**
     * Deletes an existing DctDoctor model.
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
     * Finds the DctDoctor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DctDoctor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        $model = DctDoctor::find()->with('dctDoctorLocs')->where(['dct_doctor_id' => $id])->one();
        if ($model !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
