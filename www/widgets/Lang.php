<?php
/**
 * Created by PhpStorm.
 * User: akovalchuk
 * Date: 16.04.2015
 * Time: 17:11
 */

namespace app\widgets;
use app\models\DctLanguage;

class Lang extends  \yii\bootstrap\Widget{
    public function init(){}

    public function run() {
        return $this->render('lang/view', [
            'current' => DctLanguage::getCurrent(),
            'langs' => DctLanguage::find()->where(['enable' => 1])->all(),
        ]);
    }
} 