<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ChildTooth */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Child Tooth',
]) . ' ' . $model->child_tooth_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Child Teeth'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->child_tooth_id, 'url' => ['view', 'id' => $model->child_tooth_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="child-tooth-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
