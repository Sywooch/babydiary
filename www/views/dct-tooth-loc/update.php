<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DctToothLoc */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Dct Tooth Loc',
]) . ' ' . $model->dtc_tooth_loc_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Tooth Locs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dtc_tooth_loc_id, 'url' => ['view', 'id' => $model->dtc_tooth_loc_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="dct-tooth-loc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
