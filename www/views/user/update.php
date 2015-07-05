<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DctUser */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Dct User',
]) . ' ' . $model->dct_user_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dct_user_id, 'url' => ['view', 'id' => $model->dct_user_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="dct-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
