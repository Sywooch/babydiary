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

            <h1><?= Html::encode($this->title) ?></h1>

            <div style="width: 50%; margin: 0 auto"
            <?= $this->render('_frmSignUp', [
                'model' => $model,
            ]) ?>


        </div>
    </div>
</div>
