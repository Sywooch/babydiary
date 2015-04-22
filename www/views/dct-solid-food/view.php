<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DctSolidFood */

$this->title = $model->dct_solid_food_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Solid Foods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-solid-food-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ui', 'Update'), ['update', 'id' => $model->dct_solid_food_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('ui', 'Delete'), ['delete', 'id' => $model->dct_solid_food_id], [
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
            'dct_solid_food_id',
            'position',
            'enable',
        ],
    ]) ?>

</div>