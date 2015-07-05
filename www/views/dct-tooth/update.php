<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DctTooth */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Dct Tooth',
]) . ' ' . $model->dct_tooth_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Teeth'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dct_tooth_id, 'url' => ['view', 'id' => $model->dct_tooth_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="dct-tooth-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
