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

    <div id="tabpanel" role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <?php foreach($languages as $index => $language): ?>
                <li role="presentation" <?=($index == 0) ? 'class="active"' : '';?>><a href="#lang_<?=$language->dct_language_id;?>" aria-controls="lang_<?=$language->dct_language_id;?>" role="tab" data-toggle="tab"><?=$language->name;?></a></li>
            <?php endforeach; ?>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <?php foreach($model->dctDoctorLocs as $index => $doctorLoc):?>
                <div role="tabpanel" class="tab-pane" id="lang_<?=$doctorLoc->dct_language_id;?>">
                    <?=$doctorLoc->text;?>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <div class="text-right">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('ui', 'Create') : Yii::t('ui', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


