<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Child */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Child',
]) . ' ' . $model->child_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Children'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->child_id, 'url' => ['view', 'id' => $model->child_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="child-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
