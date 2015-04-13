<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DctSolidFoodLoc */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Dct Solid Food Loc',
]) . ' ' . $model->dct_solid_food_loc_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Solid Food Locs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dct_solid_food_loc_id, 'url' => ['view', 'id' => $model->dct_solid_food_loc_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="dct-solid-food-loc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
