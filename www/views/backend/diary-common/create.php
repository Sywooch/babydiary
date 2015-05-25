<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DiaryCommon */

$this->title = Yii::t('ui', 'Create Diary Common');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Diary Commons'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diary-common-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
