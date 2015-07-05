<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ChildSolidFood */

$this->title = Yii::t('ui', 'Update {modelClass}: ', [
    'modelClass' => 'Child Solid Food',
]) . ' ' . $model->child_solid_food_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Child Solid Foods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->child_solid_food_id, 'url' => ['view', 'id' => $model->child_solid_food_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="child-solid-food-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
