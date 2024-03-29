<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DctLanguage */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Dct Language',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Languages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->dct_language_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="dct-language-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
