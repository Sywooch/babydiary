<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DctProgress */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Dct Progress',
]) . ' ' . $model->dct_progress_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Progresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dct_progress_id, 'url' => ['view', 'id' => $model->dct_progress_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="dct-progress-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
