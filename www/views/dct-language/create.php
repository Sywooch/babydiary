<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctLanguage */

$this->title = Yii::t('ui', 'Create Dct Language');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Languages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dct-language-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
