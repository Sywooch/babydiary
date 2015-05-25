<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DiaryVaccination */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Diary Vaccination',
]) . ' ' . $model->diary_vaccination_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Diary Vaccinations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->diary_vaccination_id, 'url' => ['view', 'id' => $model->diary_vaccination_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="diary-vaccination-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
