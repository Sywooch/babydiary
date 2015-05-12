<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctAgeLoc */

$this->title = Yii::t('ui', 'Create Dct Age Loc');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Age Locs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-age-loc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
