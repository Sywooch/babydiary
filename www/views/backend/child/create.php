<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Child */

$this->title = Yii::t('ui', 'Create Child');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Children'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="child-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
