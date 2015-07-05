<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Child */

$this->title = $model->child_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Children'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="child-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ui', 'Update'), ['update', 'id' => $model->child_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('ui', 'Delete'), ['delete', 'id' => $model->child_id], [
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
            'child_id',
            'user_id',
            'first_name',
            'last_name',
            'surname',
            'birth_date',
            'time_birth',
            'birth_place',
            'sex',
        ],
    ]) ?>

</div>
