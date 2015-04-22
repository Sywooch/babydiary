<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ui', 'Dct Progresses');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="related-pos">
    <div class="right" id="content">

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
    <div class="sidebar right" id="sidebar">
        <?=$this->render('../templates/dictionariesMenu');?>
    </div>
</div>
