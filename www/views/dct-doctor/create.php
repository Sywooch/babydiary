<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctDoctor */

$this->title = Yii::t('ui', 'Create Dct Doctor');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Doctors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-doctor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
