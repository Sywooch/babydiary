<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctVaccination */

$this->title = Yii::t('ui', 'Create Dct Vaccination');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Vaccinations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-vaccination-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
