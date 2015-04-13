<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DctVaccination */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Dct Vaccination',
]) . ' ' . $model->dct_vaccination_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Vaccinations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dct_vaccination_id, 'url' => ['view', 'id' => $model->dct_vaccination_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="dct-vaccination-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
