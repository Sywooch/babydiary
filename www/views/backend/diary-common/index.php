<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ui', 'Diary Commons');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diary-common-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ui', 'Create Diary Common'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'diary_common_id',
            'diary_id',
            'photo',
            'weight',
            'height',
            // 'head_circumference',
            // 'chest_circumference',
            // 'other',
            // 'notes:ntext',
            // 'spelling:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
