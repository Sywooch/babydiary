<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctUi */

$this->title = Yii::t('ui', 'Create Dct Ui');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Uis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-ui-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
