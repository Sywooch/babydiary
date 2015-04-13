<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DiaryFeeding */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Diary Feeding',
]) . ' ' . $model->diary_feeding_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Diary Feedings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->diary_feeding_id, 'url' => ['view', 'id' => $model->diary_feeding_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="diary-feeding-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
