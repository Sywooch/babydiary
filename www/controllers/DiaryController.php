<?php

namespace app\controllers;

use Yii;
use app\models\Diary;
use app\models\DctSolidFood;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;


/**
 * DiaryController implements the CRUD actions for Diary model.
 */
class DiaryController extends BaseController
{
    public $modelClass = 'app\models\Diary';



    /**
     * Lists all Diary models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Diary::find(),
        ]);

        $solidFood = DctSolidFood::find()
            ->select('`dct_solid_food`.*, `dct_solid_food_loc`.`text` as text')
            ->leftJoin('dct_solid_food_loc', '`dct_solid_food_loc`.`dct_solid_food_id` = `dct_solid_food`.`dct_solid_food_id`')
            ->where(['dct_solid_food_loc.dct_language_id' => $this->currentLngId])
            ->with('dctSolidFoodLocs')
            ->asArray()
            ->all();

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'solidFood' => $solidFood
        ]);
    }

    /**
     * Displays a single Diary model.
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
     * Creates a new Diary model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Diary();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->diary_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Diary model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->diary_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Diary model.
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
     * Finds the Diary model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Diary the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Diary::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
