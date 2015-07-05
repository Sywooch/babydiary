<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ChildSolidFood */

$this->title = Yii::t('ui', 'Create Child Solid Food');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Child Solid Foods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="child-solid-food-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
