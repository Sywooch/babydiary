<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ui', 'Dct Solid Food Locs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-solid-food-loc-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ui', 'Create Dct Solid Food Loc'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dct_solid_food_loc_id',
            'dct_solid_food_id',
            'text',
            'dct_language_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
