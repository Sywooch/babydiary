<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DiaryFeeding */

$this->title = $model->diary_feeding_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Diary Feedings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diary-feeding-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ui', 'Update'), ['update', 'id' => $model->diary_feeding_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('ui', 'Delete'), ['delete', 'id' => $model->diary_feeding_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('ui', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'diary_feeding_id',
            'diary_id',
            'feeding',
            'dct_feeding_type_id',
            'feeding_count',
            'feeding_duration',
            'solid_food',
            'solid_food_count',
            'notes:ntext',
        ],
    ]) ?>

</div>
