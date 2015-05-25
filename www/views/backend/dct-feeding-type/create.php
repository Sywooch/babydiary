<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctFeedingType */

$this->title = Yii::t('ui', 'Create Dct Feeding Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Feeding Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-feeding-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
