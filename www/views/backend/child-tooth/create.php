<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ChildTooth */

$this->title = Yii::t('ui', 'Create Child Tooth');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Child Teeth'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="child-tooth-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
