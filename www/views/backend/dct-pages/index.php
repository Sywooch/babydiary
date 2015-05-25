<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ui', 'Dct Pages');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-pages-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ui', 'Create Dct Pages'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dct_page_id',
            'title',
            'header',
            'description',
            'keywords',
            // 'seo_url:url',
            // 'content:ntext',
            // 'enable',
            // 'main_menu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
