<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ui', 'Dct Age Locs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-age-loc-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ui', 'Create Dct Age Loc'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dct_age_loc_id',
            'dct_age_id',
            'dct_language_id',
            'text',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
