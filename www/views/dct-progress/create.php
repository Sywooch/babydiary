<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctProgress */

$this->title = Yii::t('ui', 'Create Dct Progress');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Progresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-progress-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
