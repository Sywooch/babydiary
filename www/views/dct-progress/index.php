<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ui', 'Dct Progresses');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9 right" id="content">
        <div class="block">
                <h1 class="title-header"><?= Html::encode($this->title) ?></h1>
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

    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 sidebar left" id="sidebar">
        <?=$this->render('../templates/dictionariesMenu');?>
    </div>
</div>
