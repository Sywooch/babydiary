<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DctAge */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Dct Age',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Ages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->dct_age_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="dct-age-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
