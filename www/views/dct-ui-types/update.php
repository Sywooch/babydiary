<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DctUiTypes */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Dct Ui Types',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Ui Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->dct_ui_types_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="dct-ui-types-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
