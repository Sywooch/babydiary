<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctSolidFoodLoc */

$this->title = Yii::t('ui', 'Create Dct Solid Food Loc');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Solid Food Locs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-solid-food-loc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
