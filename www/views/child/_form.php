<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Child */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="child-form">

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

    <?= $form->field($model, 'child_id')->textInput() ?>

    <?= $form->field($model, 'dct_user_id')->textInput() ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'birth_date')->widget(\yii\jui\DatePicker::classname(), [
        //'language' => 'ru',
        //'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'time_birth')->textInput() ?>

    <?= $form->field($model, 'birth_place')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'sex')->dropDownList(['1' => Yii::t('ui', 'Girl'), '0' => Yii::t('ui', 'Boy')]) ?>

    <div class="text-right">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('ui', 'Create') : Yii::t('ui', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
