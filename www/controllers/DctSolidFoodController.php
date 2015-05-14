<?php

namespace app\controllers;

use Yii;
use app\models\DctSolidFood;
use app\models\DctSolidFoodLoc;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DctSolidFoodController implements the CRUD actions for DctSolidFood model.
 */
class DctSolidFoodController extends BaseController
{
    /**
     * Lists all DctSolidFood models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => DctSolidFood::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new DctSolidFood model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DctSolidFood();
        $languages = $this->getLanguages();
        $modelLoc = new DctSolidFoodLoc();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $params = Yii::$app->request->post();
            DctSolidFoodLoc::saveLocalizationData($model, $params, count($languages));
            return $this->redirect(['view', 'id' => $model->dct_solid_food_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'languages' => $languages,
                'modelLoc' => $modelLoc
            ]);
        }
    }

    /**
     * Updates an existing DctSolidFood model.
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
            DctSolidFoodLoc::saveLocalizationData($model, $params, count($languages));
            return $this->redirect(['view', 'id' => $model->dct_solid_food_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'languages' => $languages,
                'modelLoc' => DctSolidFoodLoc::getLocalizationData($id)
            ]);
        }
    }

    /**
     * Finds the DctSolidFood model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DctSolidFood the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        $model = DctSolidFood::find()->with('dctSolidFoodLocs')->where(['dct_solid_food_id' => $id])->one();
        if ($model !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
