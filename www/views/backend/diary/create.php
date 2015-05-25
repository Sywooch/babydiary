<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Diary */

$this->title = Yii::t('ui', 'Create Diary');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Diaries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diary-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
