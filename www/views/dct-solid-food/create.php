<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctSolidFood */

$this->title = Yii::t('ui', 'Create Dct Solid Food');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Solid Foods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-solid-food-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
