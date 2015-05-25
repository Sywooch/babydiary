<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DctAgeLoc */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Dct Age Loc',
]) . ' ' . $model->dct_age_loc_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Age Locs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dct_age_loc_id, 'url' => ['view', 'id' => $model->dct_age_loc_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="dct-age-loc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
