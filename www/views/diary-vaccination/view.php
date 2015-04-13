<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DiaryVaccination */

$this->title = $model->diary_vaccination_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Diary Vaccinations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diary-vaccination-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ui', 'Update'), ['update', 'id' => $model->diary_vaccination_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('ui', 'Delete'), ['delete', 'id' => $model->diary_vaccination_id], [
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
            'diary_vaccination_id',
            'diary_id',
            'dct_vaccination_id',
            'notes:ntext',
        ],
    ]) ?>

</div>
