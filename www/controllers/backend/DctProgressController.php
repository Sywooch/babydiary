<?php

namespace app\controllers\backend;

use Yii;
use app\models\DctProgress;
use app\models\DctProgressLoc;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

/**
 * DctProgressController implements the CRUD actions for DctProgress model.
 */
class DctProgressController extends BaseController
{
    /**
     * Lists all DctProgress models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => DctProgress::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new DctProgress model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DctProgress();
        $languages = $this->getLanguages();
        $modelLoc = new DctProgressLoc();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $params = Yii::$app->request->post();
            DctProgressLoc::saveLocalizationData($model, $params, count($languages));
            return $this->redirect(['view', 'id' => $model->dct_progress_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'languages' => $languages,
                'modelLoc' => $modelLoc
            ]);
        }
    }

    /**
     * Updates an existing DctProgress model.
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
            DctProgressLoc::saveLocalizationData($model, $params, count($languages));
            return $this->redirect(['view', 'id' => $model->dct_progress_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'languages' => $languages,
                'modelLoc' => DctProgressLoc::getLocalizationData($id)
            ]);
        }
    }


    /**
     * Finds the DctProgress model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DctProgress the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        $model = DctProgress::find()->with('dctProgressLocs')->where(['dct_progress_id' => $id])->one();
        if ($model !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
