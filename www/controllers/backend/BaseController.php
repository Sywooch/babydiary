<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 12.05.2015
 * Time: 23:47
 */

namespace app\controllers\backend;
use app\models\DctLanguage;
use yii\filters\VerbFilter;
use yii\web\Controller;

class BaseController extends Controller
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
     * Displays a single model.
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
     * Deletes an existing model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function getLanguages(){
        $languages = DctLanguage::find()->select(['dct_language_id as id', 'name', 'locale'])->asArray()->all();
        foreach($languages as $lang){
            $langList[$lang['id']] =$lang['name'];
        }

        return $languages;
    }
} 