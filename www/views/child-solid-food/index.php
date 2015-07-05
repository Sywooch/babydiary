<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ui', 'Child Solid Foods');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="child-solid-food-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ui', 'Create Child Solid Food'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'child_solid_food_id',
            'child_id',
            'dct_age_id',
            'dct_solid_food_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
