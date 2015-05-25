<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Diary */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Diary',
]) . ' ' . $model->diary_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Diaries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->diary_id, 'url' => ['view', 'id' => $model->diary_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="diary-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
