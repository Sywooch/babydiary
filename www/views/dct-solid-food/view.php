<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DctSolidFood */

$curLang = app\models\DctLanguage::getCurrent();
foreach($model->dctSolidFoodLocs as $solidFood){
    if($solidFood->dct_language_id == $curLang->dct_language_id){
        $this->title = $solidFood->text;
    }
}
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Dct Solid Foods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9 right" id="content">
        <div class="block">

            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                <?= Html::a(Yii::t('ui', 'Update'), ['update', 'id' => $model->dct_solid_food_id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a(Yii::t('ui', 'Delete'), ['delete', 'id' => $model->dct_solid_food_id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => Yii::t('ui', 'Are you sure you want to delete this item?'),
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'dct_solid_food_id',
                    [
                        'attribute' => 'enable',
                        'format' => ['boolean']
                    ],
                ],
            ]) ?>

        </div>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 sidebar left" id="sidebar">
        <?=$this->render('../templates/dictionariesMenu');?>
    </div>
</div>
