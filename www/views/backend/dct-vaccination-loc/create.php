<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctVaccinationLoc */

$this->title = Yii::t('ui', 'Create Dct Vaccination Loc');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Vaccination Locs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-vaccination-loc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
