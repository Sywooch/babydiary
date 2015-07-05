<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DiaryCommon */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Diary Common',
]) . ' ' . $model->diary_common_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Diary Commons'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->diary_common_id, 'url' => ['view', 'id' => $model->diary_common_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="diary-common-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
