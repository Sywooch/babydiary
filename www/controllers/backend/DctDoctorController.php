<?php

namespace app\controllers\backend;

use app\models\DctDoctorLoc;

use Yii;
use app\models\DctDoctor;
use app\models\DctDoctorSearch;
use yii\web\NotFoundHttpException;


/**
 * DctDoctorController implements the CRUD actions for DctDoctor model.
 */
class DctDoctorController extends BaseController
{
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
     * Creates a new DctDoctor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DctDoctor();
        $languages = $this->getLanguages();
        $modelLoc = new DctDoctorLoc();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $params = Yii::$app->request->post();
            DctDoctorLoc::saveLocalizationData($model, $params, count($languages));
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
        $languages = $this->getLanguages();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $params = Yii::$app->request->post();
            DctDoctorLoc::saveLocalizationData($model, $params, count($languages));
            return $this->redirect(['view', 'id' => $model->dct_doctor_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'languages' => $languages,
                'modelLoc' => DctDoctorLoc::getLocalizationData($id)
            ]);
        }
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
