<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DiaryDoctor */

$this->title = Yii::t('ui', 'Create Diary Doctor');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Diary Doctors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diary-doctor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
