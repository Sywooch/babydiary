<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctUser */

$this->title = Yii::t('ui', 'Create Dct User');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
