<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DctProgress */

$curLang = app\models\DctLanguage::getCurrent();
foreach($model->dctProgressLocs as $progress){
    if($progress->dct_language_id == $curLang->dct_language_id){
        $this->title = Yii::t('ui', 'Update') . ': ' . $progress->text;
    }
}
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Progresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dct_progress_id, 'url' => ['view', 'id' => $model->dct_progress_id]];
$this->params['breadcrumbs'][] = Yii::t('ui', 'Update');
?>
<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9 right" id="content">
        <div class="block">

            <h1><?= Html::encode($this->title) ?></h1>

            <?= $this->render('_form', [
                'model' => $model,
                'languages' => $languages,
                'modelLoc' => $modelLoc
            ]) ?>

        </div>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 sidebar left" id="sidebar">
        <?=$this->render('../templates/dictionariesMenu');?>
    </div>
</div>
