<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DctAge */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dct-age-form">

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

    <?= $form->field($model, 'name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'position')->textInput() ?>

    <div class="text-right">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('ui', 'Create') : Yii::t('ui', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
