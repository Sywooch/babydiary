<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ui', 'Dct Languages');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-language-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ui', 'Create Dct Language'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dct_language_id',
            'name',
            'prefix',
            'enable',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
