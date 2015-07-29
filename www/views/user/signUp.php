<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\web\View;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ui', 'User sign up');
$this->params['breadcrumbs'][] = $this->title;
\app\assets\SignUpAsset::register($this);

?>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12" id="content">
        <div class="block">
            <div class="ajax-loader">
                <div class="spinner"></div>
            </div>
            <h1><?= Html::encode($this->title) ?></h1>

            <div class="sign-up-block">
                <?= $this->render('_frmSignUp', [
                    'model' => $model,
                ]) ?>
            </div>
            <div class="sign-up-result">
                <?= Yii::t("ui","Registration completed."); ?>
            </div>
        </div>
    </div>
</div>
