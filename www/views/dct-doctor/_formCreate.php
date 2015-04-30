<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DctDoctor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dct-doctor-form">

    <?php $form = ActiveForm::begin([
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
            'horizontalCheckboxTemplate' => "{beginLabel}\n{endLabel}\n{beginWrapper}\n{input}\n{error}\n{endWrapper}\n{hint}",
            'horizontalCssClasses' => [
                'label' => 'col-sm-3',
                'offset' => 'col-sm-offset-3',
                'wrapper' => 'col-sm-9',
                'error' => '',
                'hint' => '',
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'dct_doctor_id')->textInput(['disabled'=>'disabled']) ?>

    <?= $form->field($model, 'enable')->dropDownList(['1' => Yii::t('ui', 'Yes'), '0' => Yii::t('ui', 'No')]) ?>


    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <?php foreach($languages as $index => $language): ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="lang_<?=$language->url;?>">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse_<?=$language->url;?>" aria-expanded="true" aria-controls="collapse_<?=$language->url;?>">
                        <?=$language->name;?>
                    </a>
                </h4>
            </div>
            <div id="collapse_<?=$language->url;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <input type="hidden" name="<?=$language->url;?>.dct_language_id" value="<?=$language->dct_language_id;?>" />
                    <div class="form-group">
                        <label>Название</label>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="text-right">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('ui', 'Create') : Yii::t('ui', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


