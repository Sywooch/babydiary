<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctDoctorLoc */

$this->title = Yii::t('ui', 'Create Dct Doctor Loc');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Doctor Locs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-doctor-loc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
