<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DctToothLoc */

$this->title = $model->dtc_tooth_loc_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Tooth Locs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-tooth-loc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ui', 'Update'), ['update', 'id' => $model->dtc_tooth_loc_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('ui', 'Delete'), ['delete', 'id' => $model->dtc_tooth_loc_id], [
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
            'dtc_tooth_loc_id',
            'dct_tooth_id',
            'text',
            'dct_language_id',
        ],
    ]) ?>

</div>
