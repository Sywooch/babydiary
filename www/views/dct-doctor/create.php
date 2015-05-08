<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DctDoctor */

$this->title = Yii::t('ui', 'Create Dct Doctor');
$this->params['breadcrumbs'][] = Yii::t('ui', 'Dictionaries');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Doctors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9 right" id="content">
        <div class="block">

    <h1><?= Html::encode($this->title) ?></h1>

            <?= $this->render('_form', [
                'model' => $model,
                'languages' => $languages,
                'langList' => $langList,
                'modelLoc' => $modelLoc
            ]) ?>

        </div>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 sidebar left" id="sidebar">
        <?=$this->render('../templates/dictionariesMenu');?>
    </div>
</div>
