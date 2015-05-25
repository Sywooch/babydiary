<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DiaryVaccination */

$this->title = Yii::t('ui', 'Create Diary Vaccination');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Diary Vaccinations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diary-vaccination-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
