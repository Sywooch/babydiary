<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctTooth */

$this->title = Yii::t('ui', 'Create Dct Tooth');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Teeth'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-tooth-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
