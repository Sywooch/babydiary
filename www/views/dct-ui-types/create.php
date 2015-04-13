<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctUiTypes */

$this->title = Yii::t('ui', 'Create Dct Ui Types');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Ui Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-ui-types-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
