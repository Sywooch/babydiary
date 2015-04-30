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
        $languages = DctLanguage::find()->all();
        $modelLocalization = new DctDoctorLoc();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->dct_doctor_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'languages' => $languages,
                'modelLocalization' => $modelLocalization,
                'action' => 'create',
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
        $languages = DctLanguage::find()->all();
        $modelLoc = DctDoctorLoc::find()->with('dctLanguage')->where(['dct_doctor_id' => $id])->all();



        if ($model->load(Yii::$app->request->post()) && $model->save()) {
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
