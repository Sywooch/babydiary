<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ui', 'Children');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row block">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <section class="title-section">
            <h1 class="title-header"><?= Html::encode($this->title) ?></h1>
            <?= Breadcrumbs::widget([
                'homeLink' => ['label' => Yii::t('ui', 'Admin panel'), 'url' => ['/admin']],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </section>
    </div>
</div>


<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 right" id="content">
        <p>
            <?= Html::a(Yii::t('ui', 'Create Child'), ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'child_id',
                'dctUser.login',
                'first_name',
                'last_name',
                'surname',
                'birth_date',
                //'time_birth',
                'birth_place',
                //'sex',

                ['class' => 'yii\grid\ActionColumn'],
            ],
            'pager' => [
                'pagination' => [
                    'pageSize' => 1,
                ]
            ],
        ]); ?>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 sidebar" id="sidebar">
        <?=$this->render('../templates/dictionariesMenu');?>
    </div>
</div>

