<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctProgressLoc */

$this->title = Yii::t('ui', 'Create Dct Progress Loc');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Progress Locs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-progress-loc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
