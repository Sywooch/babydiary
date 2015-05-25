<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ChildTooth */

$this->title = $model->child_tooth_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Child Teeth'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="child-tooth-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ui', 'Update'), ['update', 'id' => $model->child_tooth_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('ui', 'Delete'), ['delete', 'id' => $model->child_tooth_id], [
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
            'child_tooth_id',
            'child_id',
            'dct_tooth_id',
            'tooth_order',
            'tooth_date',
            'tooth_age_months',
            'tooth_age_days',
            'notes:ntext',
        ],
    ]) ?>

</div>
