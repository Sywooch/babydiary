<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ChildProgress */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Child Progress',
]) . ' ' . $model->child_progress_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Child Progresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->child_progress_id, 'url' => ['view', 'id' => $model->child_progress_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="child-progress-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
