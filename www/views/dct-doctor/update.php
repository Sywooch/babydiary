<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DctDoctor */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Dct Doctor',
]) . ' ' . $model->dct_doctor_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Doctors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dct_doctor_id, 'url' => ['view', 'id' => $model->dct_doctor_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="dct-doctor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
