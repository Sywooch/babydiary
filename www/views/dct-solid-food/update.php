<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DctSolidFood */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Dct Solid Food',
]) . ' ' . $model->dct_solid_food_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Solid Foods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dct_solid_food_id, 'url' => ['view', 'id' => $model->dct_solid_food_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="dct-solid-food-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
