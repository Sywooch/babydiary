<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DctPages */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Dct Pages',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->dct_page_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="dct-pages-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
