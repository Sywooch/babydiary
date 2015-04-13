<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ui', 'Children');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="child-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ui', 'Create Child'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'child_id',
            'user_id',
            'first_name',
            'last_name',
            'surname',
            // 'birth_date',
            // 'time_birth',
            // 'birth_place',
            // 'sex',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
