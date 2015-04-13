<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctAge */

$this->title = Yii::t('ui', 'Create Dct Age');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Ages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-age-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
