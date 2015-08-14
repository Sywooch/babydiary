<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\web\View;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ui', 'User sign in');
$this->params['breadcrumbs'][] = $this->title;
\app\assets\SignInAsset::register($this);

?>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12" id="content">
        <div class="block">
            <div class="ajax-loader">
                <div class="spinner"></div>
            </div>
            <h1><?= Html::encode($this->title) ?></h1>

            <div class="sign-in-block">
                <?= $this->render('_frmSignIn', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
</div>
