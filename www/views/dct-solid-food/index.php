<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ui', 'Dct Solid Foods');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-solid-food-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ui', 'Create Dct Solid Food'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dct_solid_food_id',
            'position',
            'enable',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
