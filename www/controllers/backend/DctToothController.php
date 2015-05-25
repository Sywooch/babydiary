<?php

namespace app\controllers\backend;

use Yii;
use app\models\DctTooth;
use app\models\DctToothLoc;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

/**
 * DctToothController implements the CRUD actions for DctTooth model.
 */
class DctToothController extends BaseController
{
    /**
     * Lists all DctTooth models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => DctTooth::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new DctTooth model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DctTooth();
        $languages = $this->getLanguages();
        $modelLoc = new DctToothLoc();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $params = Yii::$app->request->post();
            DctToothLoc::saveLocalizationData($model, $params, count($languages));
            return $this->redirect(['view', 'id' => $model->dct_tooth_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'languages' => $languages,
                'modelLoc' => $modelLoc
            ]);
        }
    }

    /**
     * Updates an existing DctTooth model.
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
            DctToothLoc::saveLocalizationData($model, $params, count($languages));
            return $this->redirect(['view', 'id' => $model->dct_tooth_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'languages' => $languages,
                'modelLoc' => DctToothLoc::getLocalizationData($id)
            ]);
        }
    }

    /**
     * Finds the DctTooth model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DctTooth the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        $model = DctTooth::find()->with('dctToothLocs')->where(['dct_tooth_id' => $id])->one();
        if ($model !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
