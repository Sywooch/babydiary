<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctPages */

$this->title = Yii::t('ui', 'Create Dct Pages');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-pages-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
