<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DiaryDoctor */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Diary Doctor',
]) . ' ' . $model->diary_doctor_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Diary Doctors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->diary_doctor_id, 'url' => ['view', 'id' => $model->diary_doctor_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="diary-doctor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
