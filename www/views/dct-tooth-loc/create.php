<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctToothLoc */

$this->title = Yii::t('ui', 'Create Dct Tooth Loc');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Tooth Locs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-tooth-loc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
