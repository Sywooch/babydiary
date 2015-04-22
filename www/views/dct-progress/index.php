<?php

use yii\helpers\Html;
use yii\grid\GridView;use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ui', 'Dct Progresses');
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
<div class="row" style="margin-top: 10px">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 right block" id="content">
    <p>
        <?= Html::a(Yii::t('ui', 'Create Dct Progress'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dct_progress_id',
            'position',
            'enable',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 sidebar block" id="sidebar">
        <?=$this->render('../templates/dictionariesMenu');?>
    </div>
</div>
