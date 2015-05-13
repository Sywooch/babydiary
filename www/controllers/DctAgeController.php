<?php

namespace app\controllers;

use Yii;
use app\models\DctAge;
use app\models\DctAgeLoc;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

/**
 * DctAgeController implements the CRUD actions for DctAge model.
 */
class DctAgeController extends BaseController
{
    /**
     * Lists all DctAge models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => DctAge::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new DctAge model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DctAge();
        $languages = $this->getLanguages();
        $modelLoc = new DctAgeLoc();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $params = Yii::$app->request->post();
            DctAgeLoc::saveLocalizationData($model, $params, count($languages));
            return $this->redirect(['view', 'id' => $model->dct_age_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'languages' => $languages,
                'modelLoc' => $modelLoc
            ]);
        }
    }

    /**
     * Updates an existing DctAge model.
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
            DctAgeLoc::saveLocalizationData($model, $params, count($languages));
            return $this->redirect(['view', 'id' => $model->dct_age_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'languages' => $languages,
                'modelLoc' => DctAgeLoc::getLocalizationData($id)
            ]);
        }
    }

    /**
     * Finds the DctAge model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DctAge the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        $model = DctAge::find()->with('dctAgeLocs')->where(['dct_age_id' => $id])->one();
        if ($model !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
