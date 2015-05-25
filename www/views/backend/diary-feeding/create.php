<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DiaryFeeding */

$this->title = Yii::t('ui', 'Create Diary Feeding');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Diary Feedings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diary-feeding-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
