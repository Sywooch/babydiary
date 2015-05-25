<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ui', 'Dct Vaccination Locs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-vaccination-loc-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ui', 'Create Dct Vaccination Loc'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dct_vaccination_loc_id',
            'dct_vaccination_id',
            'text',
            'genitive_text',
            'dct_language_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
